<?php
class Main
{
    private $io        = "err";
    private $code    = 0;
    private $isOK   = false;
    private $g46_new =0;
    private $g46_old =0;
    private $g38_new =0;
    private $g38_old =0;

    public function __construct()
    {
        $this->io=isset($_POST['transport'])?$_POST['transport']:"err";
        $this->code=isset($_POST['code'])?$_POST['code']:0;
        if (($this->io!="err")and($this->code<>0)) $this->isOK=true;
        if ($this->isOK)
        {
            $this->io=stripcslashes(strip_tags($this->io));
            $this->code=stripcslashes(strip_tags($this->code));
        }
    }


    public function isParamsOK()
    {
        return $this->isOK;
    }

    private function Connect()
    {
        $dbcnx=mysql_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD) or die("Ошибка соединения с сервером: ".mysql_error());
        mysql_select_db(DB_DATABASE) or die ("Ошибка выбора базы данных: ".mysql_error());
        $q_new=mysql_query("select sum(g46) g46,sum(g38) g38 from ".$this->io."_new where g33 like '".$this->code."%'") or die (mysql_error());
        $q_old=mysql_query("select sum(g46) g46,sum(g38) g38 from ".$this->io."_old where g33 like '".$this->code."%'") or die (mysql_error());
        $row_new = mysql_fetch_object($q_new);
        $row_old = mysql_fetch_object($q_old);
        $this->g46_new=$row_new->g46;
        $this->g46_old=$row_old->g46;
        $this->g38_new=$row_new->g38;
        $this->g38_old=$row_old->g38;
        if ($this->g46_new==null) $this->g46_new=0;
        if ($this->g46_old==null) $this->g46_old=0;
        if ($this->g38_new==null) $this->g38_new=0;
        if ($this->g38_old==null) $this->g38_old=0;
        mysql_close($dbcnx);
    }

    private function get_pr($a,$b)
    {
        return $pr=round(($a/$b)*100 - 100);
    }

    public function Run()
    {
        $this->Connect();
        if (($this->g46_new==0)or($this->g46_old==0))
        {
            if ($this->g46_new==0)
            {
                $error_nodata = "true";
            }
            else
            {
                $error_nodata = "true";
            }
        }
        else
        {
            $pr_g46=$this->get_pr($this->g46_new,$this->g46_old);
            if (($this->g38_new==0)or($this->g38_old==0))
            {
                $str2="";
            }
            else
            {
                $pr_g38=$this->get_pr($this->g38_new,$this->g38_old);
		if ($this->g38_new>=$this->g38_old)
		{
                  $value_g38 = +$pr_g38;
		}
		else
		{
      $value_g38 = $pr_g38;
		}
            }
            $textio=$this->io=="im"?"Импорт":"Экспорт";
            if ($this->g46_new>=$this->g46_old)
            {
                $value_transport = $textio;
                $value_g46 = +$pr_g46;
            }
            else
            {
                $value_transport = $textio;
                $value_g46 = $pr_g46;
            }
        }

        $value_code = $_POST['code'];

        $dbcnx=mysql_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD) or die("Ошибка соединения с сервером: ".mysql_error());
		//кодер
		mysql_query("SET NAMES 'utf8'");
		mysql_query("SET CHARACTER SET 'utf8'");
		mysql_query("SET SESSION collation_connection = 'utf8_general_ci'");
        mysql_select_db(DB_DATABASE) or die ("Ошибка выбора базы данных: ".mysql_error());
        $result = mysql_query("SELECT textv FROM ".$this->io."_new WHERE g33 = $value_code");
        $resultcheck = mysql_num_rows($result);
        if ($resultcheck == 0) {
          $error_nodata = "true";
        } else {
          $value_text = mysql_result($result, 0);
        }
        mysql_close($dbcnx);

        $mail_template_data_code = $value_code;
        $mail_template_data_text = $value_text;
        $mail_template_color_red = "#e74c3c";
        $mail_template_color_green = "#2ecc71";
        $mail_template_arrow_up = "↗ +";
        $mail_template_arrow_down = "↘ ";

        if ($_POST['transport'] == IM) {
          $mail_template_data_transport = "Импорт";
        } else {
          $mail_template_data_transport = "Экспорт";
        }


        if (value_g46 > '0') {
          $mail_template_color = $mail_template_color_green;
          $mail_template_data_physical = "$mail_template_arrow_up$value_g46";
        } else {
          $mail_template_color = $mail_template_color_red;
          $mail_template_data_physical = "$mail_template_arrow_down$value_g46";
        };

        if (value_g38 > '0') {
          $mail_template_color = $mail_template_color_green;
          $mail_template_data_money = "$mail_template_arrow_up$value_g38";
        } else {
          $mail_template_color = $mail_template_color_red;
          $mail_template_data_money = "$mail_template_arrow_down$value_g38";
        };

        if ($error_nodata =='true') {
          echo "no_data_available";
          include 'mail.Admin.php';
        } else {
          include 'mail.Admin.php';
          include 'mail.Main.php';
          echo "all_green";
        };
    }

    public function logActivity($activity)
    {
    }
}
?>
