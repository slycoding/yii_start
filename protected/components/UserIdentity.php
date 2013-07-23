<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
        private $_id;
	public function authenticate()
	{
		//ищем пользователя по имени
                $record=Users::model()->findByAttributes(array('u_login'=>$this->username));
                //если пользователь найден и его пароль совпадает с введенным...
                if($record===null)
                    $this->errorCode=self::ERROR_USERNAME_INVALID;
                else if($record->u_password!==md5($this->password))
                    $this->errorCode=self::ERROR_PASSWORD_INVALID;
                else
                {
                    //...сохраняем данные пользователя (имя и адрес фида)
                    // (в принципе, адрес фида можно не сохранять, тогда при импорте игр
                    // нужно будет выполнить дополнительный запрос)
                    $this->_id=$record->u_id;
                    $this->setState('name', $record->u_name);
                    $this->setState('xml', $record->u_xml);
                    $this->errorCode=self::ERROR_NONE;
                }
                return !$this->errorCode;
	}
}