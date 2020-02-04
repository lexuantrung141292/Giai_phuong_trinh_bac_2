<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giải phương trình bậc 2 bằng php thuần.</title>
</head>
<body>
    <h2>Giải phương trình bậc 2 sử dụng if else</h2>
        <?php
            $a=0;
            $b=2;
            $c=1;

            // giải pt a*x*x + b*x + c = 0
            if($a==0){
                if($b==0){
                    if($c==0){
                        echo "Phương trình vô số nghiệm."."<br>";
                    }
                    else{
                        echo "Phương trình vô nghiệm"."<br>";
                    }
                }
                else{
                    echo "Phương trình có nghiệm x= ".-$c/$b;
                }
            }
            else{
                $delta= $b*$b - 4*$a*$c;
                if($delta<0){
                    echo "Phương trình vô nghiệm"."<br>";
                }
                else if($delta==0){
                    echo "Phương trình có nghiệm kép là: x= ".-$b/(2*$a);
                }
                else{
                    echo "Phương trình có hai nghiệm phân bệt: X1 = ".((-$b+sqrt($delta))/4*$a)." và X2 = ".((-$b-sqrt($delta))/4*$a)."<br>";
                }
            }

        ?>

    <h2> Giải ptb2 sử dụng function </h2>
            <?php
                function giaiPtb2($a,$b,$c){
                    if($a==0){
                        if($b==0){
                            if($c==0){
                                echo "Phương trình vô số nghiệm."."<br>";
                            }
                            else{
                                echo "Phương trình vô nghiệm"."<br>";
                            }
                        }
                        else{
                            echo "Phương trình có nghiệm x= ".-$c/$b;
                        }
                    }
                    else{
                        $delta= $b*$b - 4*$a*$c;
                        if($delta<0){
                            echo "Phương trình vô nghiệm"."<br>";
                        }
                        else if($delta==0){
                            echo "Phương trình có nghiệm kép là: x= ".-$b/(2*$a);
                        }
                        else{
                            echo "Phương trình có hai nghiệm phân bệt: X1 = ".((-$b+sqrt($delta))/4*$a)." và X2 = ".((-$b-sqrt($delta))/4*$a)."<br>";
                        }
                    }        
                }
                giaiPtb2(2,-78,8);
            ?>

        <h2> Giải ptb2 sử dụng dữ liệu người dùng nhập vào từ ô input bằng if else. </h2>
            <div class="input_data">
                <form action="" method="POST">
                    <div class="input">
                        <lable>Nhập vào số thứ nhất.</lable>
                        <!-- Nhập vào kiểu số nguyên, mai lên mạng xem thử lại nhập vào kiểu text và ép về kiểu số nguyên-->
                        <input type="text" name="first_number" placeholder="Nhập số: 1, 2...">
                    </div>
                    <div class="input">
                        <lable>Nhập vào số thứ hai.</lable>
                        <!-- Nhập vào kiểu số nguyên, mai lên mạng xem thử lại nhập vào kiểu text và ép về kiểu số nguyên-->
                        <input type="text" name="second_number" placeholder="Nhập số: 1, 2...">
                    </div>
                    <div class="input">
                        <lable>Nhập vào số thứ ba.</lable>
                        <!-- Nhập vào kiểu số nguyên, mai lên mạng xem thử lại nhập vào kiểu text và ép về kiểu số nguyên-->
                        <input type="text" name="third_number" placeholder="Nhập số: 1, 2...">
                    </div>
                    <div class="input">
                        <input type="submit" name="submit" value="Giải pt bậc 2 một ẩn">
                    </div>
                </form>
            </div>
            <!-- Xử lý dữ liệu người dùng nhập vào để giải phương trình bằng script php -->
            <?php
                if(isset($_POST['submit'])){
                    $a=$_POST['first_number'];
                    $b=$_POST['second_number'];
                    $c=$_POST['third_number'];
                    if($a=="" || $b=="" || $c=="") {
                        echo "Xin mời nhập các số vào để giải phương trình."."<br>";
                    }
                    else{
                        if($a==0){
                            if($b==0){
                                if($c==0){
                                    echo "Phương trình vô số nghiệm."."<br>";
                                }
                                else{
                                    echo "Phương trình vô nghiệm"."<br>";
                                }
                            }
                            else{
                                echo "Phương trình có nghiệm x= ".-$c/$b;
                            }
                        }
                        else{
                            $delta= $b*$b - 4*$a*$c;
                            if($delta<0){
                                echo "Phương trình vô nghiệm"."<br>";
                            }
                            else if($delta==0){
                                echo "Phương trình có nghiệm kép là: x= ".-$b/(2*$a);
                            }
                            else{
                                echo "Phương trình có hai nghiệm phân bệt: X1 = ".((-$b+sqrt($delta))/4*$a)." và X2 = ".((-$b-sqrt($delta))/4*$a)."<br>";
                            }
                        }            
                    }
                }
            ?>

        <h2>Giải phương trình bậc 2 lấy dữ liệu từ người dùng nhập vào bằng hàm số</h2>
            <div class="input_data">
                <form action="" method="POST">
                    <div class="input">
                        <lable>Nhập vào số thứ nhất.</lable>
                        <!-- Nhập vào kiểu số nguyên, mai lên mạng xem thử lại nhập vào kiểu text và ép về kiểu số nguyên-->
                        <input type="text" name="first_number1" placeholder="Nhập số: 1, 2...">
                    </div>
                    <div class="input">
                        <lable>Nhập vào số thứ hai.</lable>
                        <!-- Nhập vào kiểu số nguyên, mai lên mạng xem thử lại nhập vào kiểu text và ép về kiểu số nguyên-->
                        <input type="text" name="second_number1" placeholder="Nhập số: 1, 2...">
                    </div>
                    <div class="input">
                        <lable>Nhập vào số thứ ba.</lable>
                        <!-- Nhập vào kiểu số nguyên, mai lên mạng xem thử lại nhập vào kiểu text và ép về kiểu số nguyên-->
                        <input type="text" name="third_number1" placeholder="Nhập số: 1, 2...">
                    </div>
                    <div class="input">
                        <input type="submit" name="submit1" value="Giải pt bậc 2 một ẩn">
                    </div>
                </form>
            </div>

            <!-- Giải phương trình bậc 2 sử dụng hàm số -->
            <?php
                if(isset($_POST['submit1'])){
                    $e=$_POST['first_number1'];
                    $f=$_POST['second_number1'];
                    $g=$_POST['third_number1'];
                    if($e=="" || $f=="" ||$g==""){
                        echo "Xin mời nhập các số vào để giải phương trình A*x*x + B*x + C = 0"."<br>";
                    }
                    else{
                        giaiPtb2($e,$f,$g);
                    }
                }
            ?>

            <!--Giai pt bac 2 su dung class tao san-->

        <h2> Giải ptb2 sử dụng CLASS tạo sẵn </h2>
            <div class="input_data">
                <form action="" method="POST">
                    <div class="input">
                        <lable>Nhập vào số thứ nhất.</lable>
                        <!-- Nhập vào kiểu số nguyên, mai lên mạng xem thử lại nhập vào kiểu text và ép về kiểu số nguyên-->
                        <input type="text" name="first_number2" placeholder="Nhập số: 1, 2...">
                    </div>
                    <div class="input">
                        <lable>Nhập vào số thứ hai.</lable>
                        <!-- Nhập vào kiểu số nguyên, mai lên mạng xem thử lại nhập vào kiểu text và ép về kiểu số nguyên -->
                        <input type="text" name="second_number2" placeholder="Nhập số: 1, 2...">
                    </div>
                    <div class="input">
                        <lable>Nhập vào số thứ ba.</lable>
                        <!-- Nhập vào kiểu số nguyên, mai lên mạng xem thử lại nhập vào kiểu text và ép về kiểu số nguyên-->
                        <input type="text" name="third_number2" placeholder="Nhập số: 1, 2...">
                    </div>
                    <div class="input">
                        <input type="submit" name="submit2" value="Giải pt bậc 2 một ẩn">
                    </div>
                </form>
            </div>

            <?php
                    if(isset($_POST['submit2'])){
                        $m=$_POST['first_number2'];
                        $n=$_POST['second_number2'];
                        $l=$_POST['third_number2'];
                        if($m=="" || $n=="" || $l==""){
                            echo "Xin mời nhập các số vào để giải phương trình A*x*x + B*x + C = 0"."<br>";
                    }

                    // Dẫn link class từ file khác.
                    else{
                        include 'ptb2_class.php';
               
                        $giai = new pt2();
                        
                        $giai->a=$m;
                        $giai->b=$n;
                        $giai->c=$l;
                        echo $giai->giaiPtbac2();
                    }
                }
            ?>
</body>
</html>