<?php

/* * ********************************************************************
 * DiscountCenter product developed. (2015-11-17)
 * *
 *
 *  CREATED BY MODULESGARDEN       ->       http://modulesgarden.com
 *  CONTACT                        ->       contact@modulesgarden.com
 *
 *
 * This software is furnished under a license and may be used and copied
 * only  in  accordance  with  the  terms  of such  license and with the
 * inclusion of the above copyright notice.  This software  or any other
 * copies thereof may not be provided or otherwise made available to any
 * other person.  No title to and  ownership of the  software is  hereby
 * transferred.
 *
 *
 * ******************************************************************** */

namespace MGModule\GGSSLWHMCS\models\whmcs\admins;
use MGModule\GGSSLWHMCS as main;


/**
 * Description of Repository
 *
 * @author Pawel Kopec <pawelk@modulesgarden.com>
 */
class Admins extends main\mgLibs\models\Repository{
    
    public function getModelClass() {
        return __NAMESPACE__.'\Admin';
    }
    
    /**
     * 
     * @return Admin[]
     */
    public function get() {
        return parent::get();
    }
}

