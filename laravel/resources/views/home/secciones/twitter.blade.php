    @php
        // twitter feed
        $urlXmlTwitter = "https://fetchrss.com/rss/5d264bcf8a93f8d7258b45675f19b6db8a93f89d678b4567.xml";
        $twitter = xmlToJson($urlXmlTwitter, true);
        $countTw = 3;
        // descomponemos nuestro sting de fecha
        $dateTw = date_create($twitter->pubDate);
        $dateTw = date_format($dateTw, 'd-m-Y');
        // Seleccionar la fecha de acuerdo al mapeado de datos
        $arrayDateTw =  explode("-",$dateTw);
        $dateControlTw = getDateString();
        $dateTw = $arrayDateTw[0] ." de ". $dateControlTw[$arrayDateTw[1]][0];
        $accountTw = $twitter->channel->title[0];
        // $descripcionTw=str_replace("false","false&autoplay=true",$facebook->channel->item[$post]->description);

    @endphp
    <div class="col-md-4 col-sm-12">
        {{-- twitter --}}              

        <div class="owl-timeline owl-carousel owl-theme z-0">
            <?php for ($t=0; $t < $countTw ; $t++) {?>
                <div class="item">
                <div class="wrapp-timeline p-4">
                    <p class="pad40">
                    <a target="_blank" href="{{$twitter->channel->link}}">
                        <img style="width:20%;float:left;border-radius:50px;padding:2px;border:2px solid #3b5998;" src="{{asset('storage/') . '/' . setting('site.profile')}}" alt="Chirstian cruz">
                    </a>
                    <i class="fa fa-facebook-official facebookcolor" aria-hidden="true"></i>
                    <a target="_blank" href="{{$twitter->channel->link}}">
                        <span class="screenname">
                        <span style="color:#3b5998;" class="name font-weight-bold">
                            <?php $accountTw;?>
                        </span>
                        <i class="fa fa-check-circle cirblue" aria-hidden="true"></i>
                        </span><br>
                        <span class="pl-2 fechaface">
                        <small><?php echo $dateTw; ?></small>
                        </span>
                    </a>
    
                    </p>
                    <?php
                    $descripcionTw=str_replace("false","false&autoplay=false",$twitter->channel->item[$t]->description);
                    echo $descripcionTw=str_replace("width=\"500\"","width=\"100%\"",$twitter->channel->item[$t]->description);
                    // echo '<pre>';
                    // print_r($twitter->channel->item[$t]);                  
                    // echo '</pre>';
                    ?>
                </div>
                </div>
                <?php } ?>
            </div>                  
    </div>