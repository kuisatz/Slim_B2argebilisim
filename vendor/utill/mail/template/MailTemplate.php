<?php
/**
 * B2Bilisim Framework 
 *
 * @link      https://github.com/corner82/slim_test for the canonical source repository
 * @copyright Copyright (c) 2016 B2Bilisim (http://www.b2argebilisim.com)
 * @license   
 */
namespace Utill\Mail\Template;

/**
 * mail template concrete class
 * @author Mustafa Zeynel Dağlı
 * @since 29/06/2016
 */
class MailTemplate extends AbstractMailTemplate {

    /**
     * abstract method overridden
     * @param type $variablesToBeReplaced
     * @return boolean
     */
    public function replaceTemplatePlaceHolders($variablesToBeReplaced=null) {
        if(!empty($variablesToBeReplaced)) {
            $content = $this->getTemplateContent();
            $content = str_replace(array_keys($variablesToBeReplaced), 
                        array_values($variablesToBeReplaced), 
                        $content);
            $this->templateContent = $content;
        }
        return false;  
    }
    
    /**
     * abstract method overriden
     * @param type $variablesToBeReplaced
     * @return type
     */
    public function replaceAndGetTemplateContent($variablesToBeReplaced=null) {
        $this->replaceTemplatePlaceHolders($variablesToBeReplaced);
        return $this->templateContent;
    }

    

}
