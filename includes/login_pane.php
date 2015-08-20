                                <div role="tabpanel" class="tab-pane active" id="tab-login">
                                    <h2>Login</h2>
                                    <br>    
                                    <form action="includes/login_submit" method="post">
                                        <div class="form-group">
                                            <fieldset>
                                                <div class="col-sm-6 control">
                                                    <div class="input-group col-sm-12">
                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                        <input type="text" class="form-control" id="phpro_username_login" name="phpro_username" value="" placeholder="Username" maxlength="20" required autofocus/>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-6 control">
                                                    <div class="input-group col-sm-12">
                                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                        <input type="text" class="form-control" id="phpro_password_login" name="phpro_password" value="" placeholder="Password" maxlength="20"/>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="col-sm-12 control">
                                                <div class="input-group pull-right">
                                                <button type="submit" class="btn btn-primary btn-sm control"><i class="fa fa-sign-in"></i> Login</button>
                                                </div>
                                                </div>
                                            </fieldset>
                                            <div class="col-sm-12 control">
                                                <div class="input-group">
                                                    <a href="#" id="register-anchor"></i><i class="fa fa-pencil-square-o"></i> Register for an account</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <?php
                                        if ($message !== ''){
                                            // if registration session var not set then display message and then kill the session variable 
                                            if($registerpane !== 'true') {
                                                if (strpos($message,'Success') !== false) {
                                                    echo "<div class='alert alert-success alert-dismissible alert-auto'><a class='close' data-dismiss='alert'><i class='fa fa-times'></i></a><strong><i class='fa fa-check'></i> $message</strong></div>";
                                                }
                                                if (strpos($message,'Error') !== false) {
                                                    echo "<div class='alert alert-danger alert-dismissible alert-auto'><a class='close' data-dismiss='alert'><i class='fa fa-times'></i></a><strong><i class='fa fa-exclamation-triangle'></i> $message</strong></div>";
                                                }
                                                $message = NULL;
                                                unset ($_SESSION["message"]);
                                            }
                                        }
                                    ?>
                                </div>