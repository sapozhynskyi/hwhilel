<?php
interface Deliver{
    public function getDeliver(Logger $logger);
}
interface Format{
    public function getFormat(Logger $logger);
}

class FormatRaw implements Format{

    public function getFormat(Logger $logger)
    {
        return $logger->str;
    }
}
class FormatDateDetails implements Format{

    public function getFormat(Logger $logger)
    {
        return date('Y-m-d H:i:s') . $logger->str . ' - With some details';
    }
}
class FormatWithDate implements Format{

    public function getFormat(Logger $logger)
    {
        return date('Y-m-d H:i:s') . $logger->str;
    }
}

class DeliverEmail implements Deliver {

    public function getDeliver(Logger $logger)
    {
        return "Вывод формата ({$logger->format()}) по имейл";
    }
}

class DeliverSms implements Deliver {

    public function getDeliver(Logger $logger)
    {
        return "Вывод формата ({$logger->format()}) в смс";
    }
}
class DeliverConsole implements Deliver {

    public function getDeliver(Logger $logger)
    {
        return "Вывод формата ({$logger->format()}) в консоль";
    }
}


class Logger
{
    public function __construct(Format $format, Deliver $delivery, $str)
    {   $this->str = $str;
        $this->format   = $format;
        $this->delivery = $delivery;
    }

   public function log()
    {
        $this->deliver();
    }


    public function format()
    {
        return $this->format->getFormat($this);

    }

    public function deliver()
    {
        echo $this->delivery->getDeliver($this);

    }

}

$logger = new Logger(new FormatRaw(), new DeliverEmail(),'fffff');
$logger->log();
$logger = new Logger(new FormatWithDate(), new DeliverSms(), 'egergv');
$logger->log();
$logger = new Logger(new FormatDateDetails(), new DeliverConsole(),'fwefwef');
$logger->log();

