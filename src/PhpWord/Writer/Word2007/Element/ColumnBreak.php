<?php

namespace PhpOffice\PhpWord\Writer\Word2007\Element;

/**
 * ColumnBreak element writer
 */
class ColumnBreak extends AbstractElement
{
    /**
     * Write element.
     *
     * @usedby \PhpOffice\PhpWord\Writer\Word2007\Element\AbstractElement::startElementP()
     */
    public function write()
    {
        $xmlWriter = $this->getXmlWriter();

        $xmlWriter->startElement('w:p');
        $xmlWriter->startElement('w:r');
        $xmlWriter->startElement('w:br');
        $xmlWriter->writeAttribute('w:type', 'column');
        $xmlWriter->endElement(); // w:br
        $xmlWriter->endElement(); // w:r
        $xmlWriter->endElement(); // w:p
    }
}
