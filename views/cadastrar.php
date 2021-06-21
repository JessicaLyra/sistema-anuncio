<a href="<?php echo BASE_URL;?>">Voltar</a>
    <!--MODAL-->
    <div class=" " id ="exampleModal"> 
        <div class="" >
            <div class="">
                <div class="row main-content  text-center">
                    <div class="col-md-4 text-center company__info">
                        <span class="company__logo"><h2><i class="bi bi-person-circle"></i></h2></span>
                        <h4 class="company_title">Your Company Logo</h4>
                    </div>
                    <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
                        <div class="container-fluid">
                            <div class="row">
                                <h2>Cadastre-se</h2>
                                
                            </div>
                            <div class="row">
                                <form control="" name="cadastrar" class="form-group" action="<?php echo BASE;?>cadastrar" method="POST">
                                    <div class="row">
                                        <input value="" type="text" name="nome" id="nome" class="form__input" placeholder="Digite seu nome completo" value="" required>
                                    </div>
                                    <div class="row">
                                        <input type="text" name="cpf" id="cpf" class="form__input" placeholder="Digite seu CPF" required>
                                    </div>
                                    <div class="row">
                                        <input type="text" name="email" id="email" class="form__input" placeholder="Digite seu e-mail" required>
                                    </div>
                                    <div class="row">
                                        <input type="text" name="telefone" id="telefone" class="form__input" placeholder="Digite seu telefone" required>
                                    </div>
                                    <div class="row">
                                        <!-- confiar a senha -->
                                        <input type="password" name="password" id="password" class="form__input" placeholder="Cadastre uma senha" required>
                                    </div>
                                    <div class="row">
                                        <!-- <span class="fa fa-lock"></span> -->
                                        <input type="password" name="conf_senha" id="conf_senha" class="form__input" placeholder="Confirme a senha" required >
                                    </div>
                                    
                                    <div class="row">
                                        <input type="submit" value="Cadastrar" class="btn">
                                    </div>
                                </form>
                            </div>
                            
                            
                        </div>
                    </div>
		        </div>
            </div>
        </div>
    </div>
    
    <!--FIM MODAL-->