<?php
namespace Mails;
use Hola\Mailing\MailerBuilder;

class DefaultMail extends MailerBuilder {
    public function __construct() {
        parent::__construct();
    }
    /**
     * @return string
     * Send email with title
     * This function can be deleted if not used
     */
    public function title() {
        return "Test mail";
    }

    /**
     * @return string
     * Send email with content as html string
     * This function can be deleted if not used
     */
    public function view() {
        return "<h1>Test mail</h1>";
    }
   
    public function handle()
    {
        return $this->send();
    }

}