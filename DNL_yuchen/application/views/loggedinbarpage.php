<div id="grid-home" class="column-center">
    <div class="column columnEvents">	

        <div class="row">
            <!-- Main body right -->
            <div id="mainPart2" class="column column-1-2">
                <div class="row">

                    <!-- left side nav -->
                    <div id="bigNav" class="span2">
                        <div class="tabbable">
                            <ul class="nav nav-tabs">                              
                                <li class="bigNavLinks">
                                    <a href="#tab1" data-toggle="tab">
                                        <table>
                                            <tr>
                                                <td><div id="picbarinfo" href="#"></div></td>
                                                <td>&nbsp<?php echo $this->lang->line('bigNav_BAR_INFO'); ?></td>
                                            </tr>
                                        </table>
                                    </a>
                                </li>
                                <li class="bigNavLinks active">
                                    <a href="#tab2" data-toggle="tab">
                                        <table>
                                            <tr>
                                                <td><div id="picenp" href="#"></div></td>
                                                <td>&nbsp<?php echo $this->lang->line('bigNav_EVENTS_AND_PROMOTIONS'); ?></td>
                                            </tr>
                                        </table>
                                    </a>
                                </li>
                                <li class="bigNavLinks">
                                    <a href="#tab3" data-toggle="tab">
                                        <table>
                                            <tr>
                                                <td><div id="picsm" href="#"></div></td>
                                                <td>&nbsp<?php echo $this->lang->line('bigNav_SOCIAL_MEDIA'); ?></td>
                                            </tr>
                                        </table>
                                    </a>
                                </li>
                                <li class="bigNavLinks">
                                    <a href="#tab4" data-toggle="tab">
                                        <table>
                                            <tr>
                                                <td><div id="picrnb" href="#"></div></td>
                                                <td>&nbsp<?php echo $this->lang->line('bigNav_RESERVE_OR_BOOK'); ?></td>
                                            </tr>
                                        </table>    
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div id="quick-search" class="dnl-ui-drop-shadow dnl-ui-rounded-corners eventsMainDiv size-addon2">								


                        <div class="tab-content eventsTabContent">

                            <div class="tab-pane" id="tab1">
                                Bar info....
                            </div>
                            <div class="tab-pane active" id="tab2">

                                <!-- EVENTS & PROMOTIONS -->
                                <h1><?php echo $this->lang->line('main_EVENTS_AND_PROMOTIONS'); ?></h1>

                                <!-- END OF EVENTS & PROMOTIONS -->


                            </div>
                            <div class="tab-pane" id="tab3">
                                Social media..
                            </div>
                            <div class="tab-pane" id="tab4">
                                Reserve or book..
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Overside -->

            <div class="dnl-ui-clearfix"></div>	
        </div>

    </div>

    <div class="column infoBar">				

        <div class="dnl-ui-drop-shadow dnl-ui-rounded-corners" id="openingHoursDiv">
            <h1><?php echo $this->lang->line('main_OPENING_HOURS'); ?></h1>
            <table>
                <tr>
                    <td><?php echo $this->lang->line('main_MONDAY'); ?></td>
                    <td><?php echo $this->lang->line('main_CLOSED'); ?></td>
                </tr>
                <tr>
                    <td><?php echo $this->lang->line('main_TUESDAY'); ?></td>
                    <td>14:00 - 01:00</td>
                </tr>
                <tr>
                    <td><?php echo $this->lang->line('main_WEDNESDAY'); ?></td>
                    <td>14:00 - 01:00</td>
                </tr>
                <tr>
                    <td><?php echo $this->lang->line('main_THURSDAY'); ?></td>
                    <td>14:00 - 01:00</td>
                </tr>
                <tr>
                    <td><?php echo $this->lang->line('main_FRIDAY'); ?></td>
                    <td>14:00 - 03:00</td>
                </tr>
                <tr>
                    <td><?php echo $this->lang->line('main_SATURDAY'); ?></td>
                    <td>14:00 - 03:00</td>
                </tr>
                <tr>
                    <td><?php echo $this->lang->line('main_SUNDAY'); ?></td>
                    <td>20:00 - 02:00</td>
                </tr>
            </table>
        </div>

        <div class="dnl-ui-drop-shadow dnl-ui-rounded-corners" id="addressDiv">
            <h1><?php echo $this->lang->line('main_ADDRESS'); ?></h1>

            <p><b>THE PEGASUS PUB</b></p>
            <table>
                <tr>
                    <td>Zwanenstraat 4</td>
                </tr>
                <tr>
                    <td>6811 DD ARNHEM</td>
                </tr>
                <tr>
                    <td>0631001324</td>
                </tr>
            </table>
            <br />
            <table>
                <tr>
                    <td><b>SOCIAL</b></td>
                </tr>
                <tr>
                    <td>Facebook </td>
                    <td>PegasusPub</td>
                </tr>
                <tr>
                    <td>Twitter</td>
                    <td>@PegasusPub</td>
                </tr>
            </table>
        </div>

        <div class="dnl-ui-drop-shadow dnl-ui-rounded-corners" id="friendsHereNowDiv">
            <h1><?php echo $this->lang->line('bar_FRIENDS_HERE_NOW'); ?></h1>

            <table>
                <tr>
                    <td><img src="http://r-net.rollins.edu/marketing-communications/images/facebook_silhouette.png" alt="" height="30" width="30" /></td>
                    <td>Peter van der Pol</td>
                </tr>
                <tr>
                    <td><img src="http://r-net.rollins.edu/marketing-communications/images/facebook_silhouette.png" alt="" height="30" width="30" /></td>
                    <td>Jennifer de Vries</td>
                </tr>      
                <tr>
                    <td><img src="http://r-net.rollins.edu/marketing-communications/images/facebook_silhouette.png" alt="" height="30" width="30" /></td>
                    <td>Michael Schut-Jansen</td>
                </tr>      
            </table>


        </div>
    </div>


    <!-- social media 
    <div class="dnl-ui-rounded-corners" id="footer-social-media">
        <div class="icon"><span class="dnl-ui-sprite facebook"></span></div>
        <div class="text"><span><?php echo $this->lang->line('social_media_STAY_INFORMED_WITH_FACEBOOK'); ?></span> <a href="#"><?php echo $this->lang->line('social_media_AND_LIKE_US_ON_FACEBOOK'); ?></span></a></div>
        <div class="divider"><hr></div>
        <div class="icon"><span class="dnl-ui-sprite twitter"></span></div>
        <div class="text"><span><?php echo $this->lang->line('social_media_STAY_EVEN_MORE_INFORMED_WITH_TWITTER'); ?></span> <a href=""><?php echo $this->lang->line('social_media_AND_FOLLOW_US_ON_TWITTER'); ?></a></div>
        <div class="divider"><hr></div>				
        <div class="icon"><span class="dnl-ui-sprite linkedin"></span></div>
        <div class="text"><span><?php echo $this->lang->line('social_media_JON_US_ON_LINKEDIN'); ?></span> <a href=""><?php echo $this->lang->line('social_media_VIA_LINKEDIN'); ?></a></div>		
    </div>-->


</div>

