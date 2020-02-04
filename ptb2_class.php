<?php
    class pt2 {
                    public $a,$b,$c;
                    public $err;
                    
                    public function giaiPtbac2(){
                        // không cần sử dụng biến $this->a, hay b hay c vì các biến này không dùng giá trị trong hàm này, phương trình này xây lên chỉ để dùng hàm
                        // trong lớp với giá trị nhập từ bên ngoài vào. 
                      
                        if($this->a==0){
                            if($this->b==0){
                                if($this->c==0){
                                    return "Phương trình vô số nghiệm."."<br>";
                                }
                                else{
                                    return "Phương trình vô nghiệm"."<br>";
                                }
                            }
                            else{
                                return "Phương trình có nghiệm x= ".-$this->c/$this->b;
                            }
                        }
                        else{
                            $delta= $this->b*$this->b - 4*$this->a*$this->c;
                            if($delta<0){
                                return "Phương trình vô nghiệm"."<br>";
                            }
                            else if($delta==0){
                                return "Phương trình có nghiệm kép là: x= ".-$this->b/(2*$this->a);
                            }
                            else{
                                return "Phương trình có hai nghiệm phân bệt: X1 = ".((-$this->b+sqrt($delta))/4*$this->a)." và X2 = ".((-$this->b-sqrt($delta))/4*$this->a)."<br>";
                            }
                        }            
                    }
                }
?>