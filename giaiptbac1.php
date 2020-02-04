<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giai pt bac nhat 1 an</title>
</head>
<body>
    <h2>Giải Phương trình bậc 1 không dùng function.</h2>
        <?php
            $a=4;
            $b=5;

            // giải phương trình không dùng hàm, nghiệm sẽ được tính tùy thuộc vào giá trị được nhập vào từ trên. 
            if($a==0){
                if($b!=0){
                    echo "Phương trình vô nghiệm";
                }
                else{
                    echo "Phương trình vô số nghiệm";
                }
            }
            else{
                echo "Phương trình có nghiệm là: X=  ".-$b/$a;
            }
        ?>
    <h2>Giải phương trình bậc nhất sử dụng hàm</h2>
        <?php
            function giaiPtbac1($a,$b){
                if($a==0){
                    if($b!=0){
                        echo "Phương trình vô nghiệm."."<br>";
                    }
                    else{
                        echo "Phương trình vô số nghiệm."."<br>";
                    }
                }
                else{
                    echo "Phương trình có nghiệm là: X=  ".-$b/$a."<br>";
                }   
            }
            giaiPtbac1(0,0);
            giaiPtbac1(3,0);
            giaiPtbac1(0,6);
            giaiPtbac1(4,8);
        ?>
    <h2>Giải phương trình bậc nhất với đầu vào các số do người dùng nhập vào.</h2>
        <div class="input_first">
            <form action="" method="POST">
                <div class="input">
                    <lable>Nhập số thứ nhất</lable>
                    <input type="text" name="first_number" placeholder="Xin mời nhập số thứ nhất vào: 1, 2, 3...">
                </div>
                <div class="input">
                    <lable>Nhập số thứ hai</lable>
                    <input type="text" name="second_number" placeholder="Xin mời nhập số thứ hai vào: 1, 2, 3...">
                </div>
                <div class="input">
                    <input type="submit" name="submit" value="Giải pt bậc nhất">
                </div>
            </form>
        </div>
            <!--Đoạn Script xử lý cho dữ liệu người dùng nhập vào form để giải phương trình-->
            <?php
                if(isset($_POST["submit"])){
                    $x=$_POST["first_number"];
                    $y=$_POST["second_number"];
                    $err="";
                    $return="";
                    // Nếu các số nhập vào là rỗng thì sẽ phải nhập lại
                    if($x=="" || $y==""){
                        $err="Xin mời nhập hai số vào để giải phương trình";
                        echo $err."<br>";
                    }
                    else{
                        echo "Với các số a = ".$x." Và b = ".$y." Thì phương trình bậc nhất a*x + b =0 sẽ có nghiệm là:"."<br>";
                        if($x==0){
                            if($y!=0){
                                $return="Phương trình vô nghiệm.";
                                echo $return."<br>";
                            }
                            else{
                                $return="Phương trình vô số nghiệm.";
                                echo $return."<br>";
                            }
                        }
                        else{
                            $return=-$y/$x;
                            echo "Phương trình có nghiệm là: X= ".$return."<br>";
                        } 
                    }
                }
            ?>
        <h2>Giải phương trình bậc nhất có sử dụng hàm (function) lấy dữ liệu từ người dùng nhập vào</h2>
            <div class="input_second">
                <form action="" method="POST">
                    <div class="input">
                        <lable>Nhập số thứ nhất</lable>
                        <input type="text" name="first_number1" placeholder="Xin mời nhập số thứ nhất vào: 1, 2, 3...">
                    </div>
                    <div class="input">
                        <lable>Nhập số thứ hai</lable>
                        <input type="text" name="second_number1" placeholder="Xin mời nhập số thứ hai vào: 1, 2, 3...">
                    </div>
                    <div class="input">
                        <input type="submit" name="submit1" value="Giải pt bậc nhất">
                    </div>
                </form>
            </div>

            <!-- Code php để giải pt bậc nhất có sử dụng hàm để lấy dữ liệu là người dùng nhập vào -->
            <?php
                // viết sẵn hàm trước
                function gPtb1($e,$f){
                            if($e==0){
                                if($f==0){
                                    return "Phương trình vô số nghiệm."."<br>";
                                }
                                else{
                                    return "Phương trình vô nghiệm"."<br>";
                                }
                            }      
                            else{
                                return "Phương trình có nghiệm là: X= ".-$f/$e;
                            }

                }
                
                if(isset($_POST['submit1'])){
                        $c=$_POST['first_number1'];
                        $d=$_POST['second_number1'];
                        if($c=="" || $d==""){
                            echo "Xin mời nhập các số vào để giải phương trình"."<br>";
                        }
                        else{
                            echo giaiPtbac1($c,$d);
                        }
                 }
            ?>


</body>
</html>