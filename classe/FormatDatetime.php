<?php  
class FormatDatetime{
	private $strNombre=array(
        array("","arivo","roarivo"),
        array("","zato","roanjato","telonjato","efajato","dimanjato","eninjato","fitonjato","valonjato","sivinjato"),
        array("","folo","roapolo","telopolo","efapolo","dimapolo","enimpolo","fitopolo","valopolo","sivifolo"),
	    array("","iraika","roa","telo","efatra","dimy","enina","fito","valo","sivy","folo")
    );
    private $listTime=array();
    private $listMonth=array("","Janoary","Febroary","Marsa","Avrily","Mey","Jiona","Jolay","Aogositra","Septambra","Oktobra","Novambra","Desambra");
    private $listMonthFrc=array("","janvier","fevrier","mars","avril","mai","juin","juillet","août","septembre","octobre","novembre","decembre");
    public function getDateJugement($date){
        $dateList=explode("-", $date);
        return $date[2]." ".$this->listMonth[intval($dateList[1])]." taona ".$dateList[0];
    }
    public function getStringAge($age){
        return $this->Day($age)." taona";
    }
	public function completeTimeTab(){
        $this->listTime[0]="12";
        $i=0;
        for($i=1; $i<13; $i++){
            $this->listTime[$i]="0".$i;
        }
        for($j=1; $j<12; $j++){
            $this->listTime[$i]="0".$j;
            $i++;
        }       
    }
    public function getDateFrench($date){
        $dateList=explode("-", $date);
        return $dateList[2]." ".$this->listMonthFrc[intval($dateList[1])]." ".$dateList[0];
    }
    public function getDateMalagasy($date){
        $dateList=explode("-", $date);
        $strDate="";
        if ($dateList[2]=="00" && $dateList[1]!="00" && $dateList[0]!="00") {
            $strDate="volana ".$this->listMonth[intval($dateList[1])]." ".$dateList[0];
        }
        else{
            $strDate=$dateList[2]." ".$this->listMonth[intval($dateList[1])]." ".$dateList[0];
        }
        return $strDate;
    }
    public function getStringDate($date){
        $splittedDate=explode("-",$date);
        $strDate="";
        if ($splittedDate[2]=="00" && $splittedDate[1]!="00" && $splittedDate[0]!="00") {
            $strDate="volana ".$this->listMonth[intval($splittedDate[1])]." ".$this->Year($splittedDate[0]);
        }
        else{
            $strDate=$this->Day($splittedDate[2])." ".$this->listMonth[intval($splittedDate[1])]." ".$this->Year($splittedDate[0]);
        }
        return $strDate;
    }
    public function Day($day){
        $convertDay="";
        $convertDay=$convertDay.$this->strNombre[3][intval($day[1])];
        $convertDay=$convertDay.$this->dontEquals4($day[0],$day[1], "0", " amby ");
        $convertDay=$convertDay.$this->strNombre[2][intval($day[0])];
        return $convertDay;
    }
    public function Year($year){
        $convertYear="";
        $convertYear.=$this->strNombre[3][intval($year[3])];
        $convertYear.=$this->dontEquals4($year[2],$year[3],"0"," amby ");
        $convertYear.=$this->strNombre[2][intval($year[2])];
        $convertYear.=$this->dontEquals3($year[1],"0"," sy ");
        $convertYear.=$this->strNombre[1][intval($year[1])];
        if(substr($year,1,4)=="000"){
            $convertYear=$this->strNombre[0][intval($year[0])];
        }
        else{ 
            $convertYear=$convertYear." sy ".$this->strNombre[0][intval($year[0])]; 
        }
        return "taona ".$convertYear;
    }
    public function getStringTime($time){
        $list=explode(":",$time);
        return $this->hour($list[0], $list[1])." ".$this->minute($list[1])." ".$this->getSymTime($list[0]);
    }
    public function hour($hour,$minute){
        $h="";
        $hour=$this->listTime[intval($hour)];
        if ($hour=="01"){
            $h="iray";
        }
        else{
            $h.=$this->strNombre[3][intval($hour[-1])];
            $h.=$this->dontEquals4($hour[-1],$hour[-2],"0"," amby ");
            $h.=$this->strNombre[2][intval($hour[-2])];
        }
        return $h." ora";
    }
    public function minute($minute){
        $min="";
        if($minute=="15")
            $min="sy fahefany";
        else if($minute=="20")
            $min="sy fahatelony";
        else if($minute=="30")
            $min="sy sasany";
        else{
            $min.="sy ";
            $min.=$this->strNombre[3][intval($minute[1])];
            $min.=$this->dontEquals4($minute[0],$minute[1],"0"," amby ");
            $min.=$this->strNombre[2][intval($minute[0])];
            if($minute!="00"){
                $min .=" minitra";
            }
            else{
                $min="";
            }
        }
        return $min;
    }
    public function getSymTime($hour){
        $str="";
        $h=intval($hour);
        if ($h==0 || $h>=19)
            $str="alina";
        else if($h>=1 && $h<=10)
            $str="maraina";
        else if($h>=11 && $h<=12)
            $str="atoandro";
        else if($h>=13 && $h<=17)
            $str="tolak'andro";
        else
            $str="hariva";
        return $str;
    }
    public function dontEquals3($objectCompared, $reference, $value){
        $str="";
        if($objectCompared!=$reference){
            $str.=$value;
        }
        return $str;
    }
    public function dontEquals4($objectCompared1, $objectCompared2, $reference, $value){
        $str="";
        if ($value==" amby " && intval($objectCompared1.$objectCompared2)<20) {
            $value=" ambin'ny ";
        }
        if($objectCompared1!=$reference && $objectCompared2!=$reference ){
            $str.=$value;
        }
        return $str;
    }
}
?>