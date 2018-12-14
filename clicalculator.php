        <?php
        /* Calculator Program in Php CLI*/
        /*Exploding argv's 2nd element and setting dilimiter as comma and getting total count of element*/
        $pieces = explode(",",$argv[2]);
        $arrLen=count($pieces);
        /*---------------------------------Addition Code---------------------------------*/
        if($argv[1]=="add")
        {
        $sum=0;
        for($i=0;$i<$arrLen;$i++)
        {
        $sum = $sum + $pieces[$i] .PHP_EOL;    
        }
        print_r($sum);
        }
        /*---------------------------------Substraction Code---------------------------------*/
        elseif($argv[1]=="sub"){
            $sub=$pieces[0];
        for($i=1;$i<$arrLen;$i++)
        { 
            $sub = $sub - $pieces[$i].PHP_EOL;    
        }
        print_r($sub);
        }
        /*---------------------------------Multiplication Code---------------------------------*/
        elseif($argv[1]=="mul")
            {
                $mul=$pieces[0];
                for($i=1;$i<$arrLen;$i++)
                { 
                $mul = $mul * $pieces[$i] .PHP_EOL;    
                }
                print_r($mul);
            }  
            /*---------------------------------Division Code---------------------------------*/
        elseif($argv[1]=="div")
            {
                $div=$pieces[0];
                for($i=1;$i<$arrLen;$i++)
                { 
                $div = $div / $pieces[$i] .PHP_EOL;    
                }
                print_r($div);
            }  
            /*---------------------------------Default Case---------------------------------*/
            else
            {
                echo "Invalid Choice";
            }