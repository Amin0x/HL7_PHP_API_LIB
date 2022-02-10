<?php


namespace amin0x\nabidh;


class MDM_T11_Document_Cancel_Notification extends ADTA01 implements IMessage
{

    private TXA $txa;

    /**
     * MDM_T11_Document_Cancel_Notification constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->getMessageHeader()->setMessageType('MDM^T11');
        $this->getEventType()->setEventTypeCode('T11');
    }

    /**
     * @return TXA
     */
    public function getTxa(): TXA
    {
        return $this->txa;
    }

    /**
     * @param TXA $txa
     */
    public function setTxa(TXA $txa): void
    {
        $this->txa = $txa;
    }

    public function __toString(): string
    {
        // TODO: Implement __toString() method.
    }
}