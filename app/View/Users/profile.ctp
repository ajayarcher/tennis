<div class="wrapper">
    <header>
        <?php echo $this->element('leftsidebar'); ?>

        <span class="togg-btn" onclick="openNav()"><img src="<?php echo Configure::read('App.baseUrl'); ?>/images/toggle.png"></span>


        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <a href="javascript:" class="pro-set-img">
                        <img src="<?php echo $userDetails['UserDetail']['profile_picture'] == '' ? Configure::read('App.baseUrl') . '/images/profile.png' : Configure::read('App.baseUrl') . '/uploads/' . $userDetails['UserDetail']['profile_picture']; ?>" width="" height="" alt="Logo"></a>
                </div>
            </div>
        </div>
    </header>

    <div class="overlay" style="display:none"></div>
    <div class="lower-header">
        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <h3><?php echo $userDetails['UserDetail']['first_name'] . " " . $userDetails['UserDetail']['surname']; ?></h3>
            </div>

        </div>

    </div>


    <?php echo $this->Form->create('UserDetail'); ?>
    <div class="profile-dis">
        <form>
            <div class="form-group hideOverflow">
                <h2>Project.<?php echo $userDetails['UserDetail']['sport_level_name']; ?> level</h2>

                <div class="point-view">
                    <label>Point:</label>
                    <p><?php echo $userDetails['UserDetail']['point']; ?></p>
                </div>
                <div class="point-view">
                    <label>Reliability:</label>
                    <p><?php echo $userDetails['UserDetail']['reliability']; ?>%</p>
                </div>

                <div class="progress-bar-new">
                    <p>PROGRESS TO NEXT LEVEL +500 points per level)<span class="red-tooltip" data-toggle="tooltip" data-placement="top" title="+500 point per level"><img src="<?php echo Configure::read('App.baseUrl'); ?>/images/tooltip-question.png"></span> </p>
                    <ul class="skill-list">
                        <li class="skill">
                            <progress class="skill-1" max="100" value="75">
                                <strong>75%</strong>
                            </progress>

                        </li></ul>      
                </div>

                <div class="switch-button1">
                    <h5>Publicly Viewable:</h5>
                    <div class="switch">
                        <input id="cmn-toggle-4" class="cmn-toggle cmn-toggle-round-flat" value="1" name="data[UserDetail][is_sport_level_public]" type="checkbox" <?php echo $userDetails['UserDetail']['is_sport_level_public'] == 1 ? "checked" : ""; ?>>
                        <label for="cmn-toggle-4"></label>
                    </div>
                </div>

            </div>
            <div class="border"></div>

            <div class="form-group">
                <h2>Set Mode <span class="red-tooltip" data-toggle="tooltip" data-placement="top" title="Social - play against other player+2 levels from your current level Competitive - play against other players within your level or 1 level above"><img src="<?php echo Configure::read('App.baseUrl'); ?>/images/tooltip-question.png"></span></h2>
                <div class="radio-button">
                    <ul>
                        <li>
                            <label>
                                <input type="radio" name="data[UserDetail][default_mode]" value="Social" <?php echo $userDetails['UserDetail']['default_mode'] == 'Social' ? "checked" : ""; ?> />
                                <span class="lbl padding-8">Social (Default)</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="data[UserDetail][default_mode]" value="Competitive" <?php echo $userDetails['UserDetail']['default_mode'] == 'Competitive' ? "checked" : ""; ?> />
                                <span class="lbl padding-8">Competitive</span>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border"></div>

            <div class="form-group position">
                <div class="switch-button">
                    <h5>Publicly Viewable:</h5>
                    <div class="switch">
                        <input id="cmn-toggle-5" class="cmn-toggle cmn-toggle-round-flat" value="1" name="data[UserDetail][is_rating_public]" type="checkbox" <?php echo $userDetails['UserDetail']['is_rating_public'] == 1 ? "checked" : ""; ?>>
                        <label for="cmn-toggle-5"></label>
                    </div>
                </div>
                <h2>Rating</h2>
                <div class="rating">
                    <h5>Self-rating:</h5><p><?php echo $userDetails['UserDetail']['self_rating']; ?></p>
                </div>
                <div class="rating">
                    <h5>Coach Rating:</h5><p><?php echo $userDetails['UserDetail']['coach_rating']; ?></p>
                </div>
                <div class="rating">
                    <h5>NTRP:</h5><p><?php echo $userDetails['UserDetail']['ntrp_rating']; ?></p>
                </div>
                <div class="rating">
                    <h5>UTR:</h5><p><?php echo $userDetails['UserDetail']['utr_rating']; ?></p>
                </div>
                <div class="rating">
                    <h5>ITN:</h5><p><?php echo $userDetails['UserDetail']['itn_rating']; ?></p>
                </div>
            </div>
            <div class="border"></div>

            <div class="form-group position">
                <div class="switch-button">
                    <h5>Publicly Viewable:</h5>
                    <div class="switch">
                        <input id="cmn-toggle-6" class="cmn-toggle cmn-toggle-round-flat" type="checkbox" value="1" name="data[UserDetail][is_rank_public]" <?php echo $userDetails['UserDetail']['is_rank_public'] == 1 ? "checked" : ""; ?>>
                        <label for="cmn-toggle-6"></label>
                    </div>
                </div>
                <h2>Ranking</h2>
                <div class="rating">
                    <h5>Global Ranking:</h5><p><?php echo $userDetails['UserDetail']['global_rank']; ?></p>
                </div>
                <div class="rating">
                    <h5>Band Ranking:</h5><p><?php echo $userDetails['UserDetail']['band_rank']; ?></p>
                </div>
                <div class="rating">
                    <h5>Tribe 1 Ranking:</h5><p><?php echo $userDetails['UserDetail']['tribe1_rank']; ?></p>
                </div>
                <div class="rating">
                    <h5>Tribe 2 Ranking:</h5><p><?php echo $userDetails['UserDetail']['tribe2_rank']; ?></p>
                </div>
            </div>
            <div class="border"></div>

            <div class="form-group">                    
                <h2>Match History</h2>
                <div class="table-content">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>PLAY</th>
                                <th>OPPONENT</th>
                                <th>MATCH TYPE</th>
                                <th>RESULT</th>
                                <th>DATE PLAYED</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($userDetails['User']['Match'] as $match) { ?>
                                <tr>
                                    <td><?php echo $match['play']; ?></td>
                                    <td><?php echo $match['oponent']; ?></td>
                                    <td><?php echo $match['match_type']; ?></td>
                                    <td><?php echo $match['result']; ?></td>
                                    <td><?php echo date("m/y", strtotime($match['date_played'])); ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="border"></div>

            <div class="form-group position">
                <div class="switch-button">
                    <h5>Publicly Viewable:</h5>
                    <div class="switch">
                        <input id="cmn-toggle-7" class="cmn-toggle cmn-toggle-round-flat" value="1" type="checkbox" name="data[UserDetail][is_badge_public]" <?php echo $userDetails['UserDetail']['is_badge_public'] == 1 ? "checked" : ""; ?>>
                        <label for="cmn-toggle-7"></label>
                    </div>
                </div>
                <h2>Badges</h2>
                <div class="badges">
                    <?php foreach ($userDetails['User']['Badge'] as $badge) { ?>
                        <div class="badge-img"><img src="<?php echo Configure::read('App.baseUrl'); ?>/uploads/<?php echo $badge['image']; ?>">
                            <div class="img-cap"><?php echo $badge['name']; ?></div>
                        </div>
                    <?php } ?>
                </div>
                <div class="show-all">
                    <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Show all badges</a>
                </div>
            </div>
            <div class="border"></div>

            <div class="form-group position">                    
                <h2 class="dib">My Tribes</h2>
                <div class="pp">
                    <p class="dib">Filter by: </p>

                    <div class="styled-select grey">
                        <select>
                            <option value="national">National</option>
                            <option value="global">Global</option>
                        </select>
                    </div>

                </div>
                <div class="clearfix"></div>

                <div class="table-content">
                    <table class="table">
                        <thead>

                            <tr>
                                <th><i class="fa fa-caret-down" aria-hidden="true"></i> Rank</th>
                                <th><i class="fa fa-caret-down" aria-hidden="true"></i> Tribe Name</th>
                                <th>Tribe Leader</th>
                                <th>Date Joined</th>
                            </tr>

                        </thead>
                        <tbody>
                            <?php foreach ($userDetails['User']['Tribe'] as $tribe) { ?>
                                <tr>
                                    <td><?php echo $tribe['rank']; ?></td>
                                    <td><?php echo $tribe['name']; ?></td>
                                    <td><span><?php echo $tribe['leader']; ?></span></td>
                                    <td><?php echo date("m/y", strtotime($tribe['date_joined'])); ?></td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="border"></div>

            <div class="form-group">
                <h2>Preferences</h2>
                <div class="pref">
                    <h5>Preferred Coach:</h5>
                    <div class="styled-select grey pull-right">
                        <select name="data[UserDetail][preferred_coach]">
                            <option value="Kiril T." <?php echo $userDetails['UserDetail']['preferred_coach'] == 'Kiril T.' ? 'selected' : ''; ?>>Kiril T.</option>
                            <option value="Kiril T." <?php echo $userDetails['UserDetail']['preferred_coach'] == 'Kiril T.' ? 'selected' : ''; ?>>Kiril T.</option>                            
                        </select>
                    </div>
                </div>
                <div class="pref">
                    <h5>Preferred Venue:</h5>
                    <div class="styled-select grey pull-right">
                        <select name="data[UserDetail][preferred_venue]">
                            <option value="Hamptons" <?php echo $userDetails['UserDetail']['preferred_venue'] == 'Hamptons' ? 'selected' : ''; ?>>Hamptons</option>
                            <option value="Kiril T." <?php echo $userDetails['UserDetail']['preferred_venue'] == 'Kiril T.' ? 'selected' : ''; ?>>Kiril T.</option>                            
                        </select>
                    </div>
                </div>
                <div class="pref">
                    <h5>Preferred Court Surface:</h5>
                    <div class="styled-select grey pull-right">
                        <select name="data[UserDetail][preferred_court_surface]">
                            <option value="Clay" <?php echo $userDetails['UserDetail']['preferred_court_surface'] == 'Clay' ? 'selected' : ''; ?>>Clay</option>
                            <option value="Kiril T." <?php echo $userDetails['UserDetail']['preferred_court_surface'] == 'Kiril T.' ? 'selected' : ''; ?>>Kiril T.</option>                            
                        </select>
                    </div>
                </div>
                <div class="pref">
                    <h5>Doubles Partners:</h5>

                    <button type="submit" class="btn btn-default pull-right">None</button>

                    <div class="s-btn">
                        <h5 class="pull-left">Open to Beacon Play:</h5>
                        <div class="switch pull-right">
                            <input id="cmn-toggle-8" class="cmn-toggle cmn-toggle-round-flat" value="1" type="checkbox" name="data[UserDetail][is_beaconplay]" <?php echo $userDetails['UserDetail']['is_beaconplay'] == 1 ? "checked" : ""; ?>>
                            <label for="cmn-toggle-8"></label>
                        </div>
                    </div>
                    <div class="s-btn">
                        <h5 class="pull-left">Open to Challenge:</h5>
                        <div class="switch pull-right">
                            <input id="cmn-toggle-9" class="cmn-toggle cmn-toggle-round-flat" value="1" type="checkbox" name="data[UserDetail][is_challangeplay]" <?php echo $userDetails['UserDetail']['is_challangeplay'] == 1 ? "checked" : ""; ?>>
                            <label for="cmn-toggle-9"></label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border"></div>

            <div class="form-group">
                <div class="btn-form width-50 marg-top-25 text-center">
                    <button type="submit" class="btn btn-default">Save</button>
                </div></div>
        </form>

    </div>

    <?php echo $this->Form->end(); ?>



</div>
<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>


<script>
    $(document).ready(function () {
        $(".togg-btn").click(function () {
            $(".overlay").css("display", "block");
        });

        $(".closebtn").click(function () {
            $(".overlay").css("display", "none");
        });
        $('#UserDetailProfileForm').submit(function () {
            var dados = $(this).serialize();

            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: dados,
                success: function (data)
                {
                    data = JSON.parse(data);
                    if (!data.status) {
                        alert(data.message);
                    } else {
                        window.location.href = 'profile';
                    }
                }
            });

            return false;
        });
    });
</script>