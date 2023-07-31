<?php
namespace Luiscv\Idp\views\components;

class Form {
    protected string $formLogin;
    public function __construct()
    {
        $this->formLogin = '
        <div class="formGeneral">
                <div class="formGeneralContent">
                    <form>
                        <h3>Ingresar</h3>
                        <img src="src/views/assets/images/users.png">
                        <label alt="Email"><input type="email" placeholder="Email"></label>
                        <label alt="Contraseña"><input type="password" placeholder="Contraseña"></label>
                        <input type="submit" value="Ingresar" class="boton">
                    </form>
                </div>
                <div class="formGeneralContent">
                    <form action="./src/models/Register.php" method="POST">
                        <h3>Registrarse</h3>
                        <label alt="Nombre y Apellido">
                            <input type="text" name="Name" placeholder="Nombre y Apellido">
                        </label>
                        <div class="radioSexo">
                            <p>Sexo:</p>
                                <div>
                                    <input type="radio" name="Sex" value="Varon" id="Varon"><label alt="Varon" for="Varon">Varón</label>
                                    <input type="radio" name="Sex" value="Mujer" id="Mujer"><label alt="Mujer" for="Mujer">Mujer</label>
                                </div>
                        </div>
                        <label alt="Email"><input type="email" name="Email" placeholder="Email"></label>
                        <label alt="Contraseña"><input type="password" name="Password" placeholder="Contraseña"></label>
                        <label alt="Confirmar contraseña"><input type="password"  name="PasswordConfirm" placeholder="Confirmar contraseña"></label>
                        <input type="submit" value="Registrar" class="boton">
                    </form>
                </div>
            </div>
        ';
    }
    public function getFormLogin(){
        return $this->formLogin;
    }
    public function getFormContact(string $getTitle){
        $getFormContact = '
        <div class="formGeneral">
        <div class="formGeneralContent">
        <form action="" method="POST">
            <h3>'. $getTitle .'</h3>
            <label alt="Nombres"><input type="text" placeholder="Nombres"></label>
            <label alt="Email"><input type="email" placeholder="Email"></label>
            <label alt="Mensaje"><textarea rows="10" cols="5" placeholder="Déjanos tu mensaje aquí"></textarea></label>
            <input type="submit" class="boton">
        </form>
        </div>
        </div>
        ';
        return $getFormContact;
    }
}