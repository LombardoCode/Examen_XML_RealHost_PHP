<?php

class Comprobante extends XML
{
    function __construct()
    {
        /**
         * NOTA: Se agregaron los atributos «Fecha» y «SubTotal» y se adicionalmente se reacomodó el arreglo (Array) para que los atributos del XML pudieran ser mostrados en el output en el orden especificado según las instruciones
         */
        $this->atributos = [];
        $this->atributos['Version'] = '3.3';
        $this->atributos['Fecha'] = ''; // Agregamos el atributo faltante: "Fecha"
        $this->atributos['Sello'] = ' ';
        $this->atributos['NoCertificado'] = '';
        $this->atributos['Certificado'] = ' ';
        $this->atributos['SubTotal'] = ''; // Agregamos el atributo faltante: "SubTotal"
        $this->atributos['Moneda'] = '';
        $this->atributos['Total'] = '';
        $this->atributos['MetodoPago'] = 'PUE';
        $this->atributos['FormaPago'] = '';
        $this->atributos['TipoDeComprobante'] = '';
        $this->atributos['LugarExpedicion'] = '';
        $this->atributos['Serie'] = '';
        $this->atributos['Folio'] = '';
        $this->atributos['CondicionesDePago'] = '';
        $this->atributos['Descuento'] = '';
        $this->atributos['MotivoDescuento'] = '';
        $this->atributos['TipoCambio'] = '';
        $this->atributos['NumCtaPago'] = '';
        $this->atributos['FolioFiscalOrig'] = '';
        $this->atributos['SerieFolioFiscalOrig'] = '';
        $this->atributos['FechaFolioFiscalOrig'] = '';
        $this->atributos['MontoFolioFiscalOrig'] = '';
        $this->rules = [];
        $this->rules['Version'] = 'R';
        $this->rules['Fecha'] = 'R'; // Atributo requerido (Fecha)
        $this->rules['Sello'] = 'R';
        $this->rules['NoCertificado'] = 'R';
        $this->rules['Certificado'] = 'R';
        $this->rules['SubTotal'] = 'R'; // Atributo requerido (SubTotal)
        $this->rules['Moneda'] = 'R';
        $this->rules['Total'] = 'R';
        $this->rules['MetodoPago'] = 'R';
        $this->rules['FormaPago'] = 'R';
        $this->rules['TipoDeComprobante'] = 'R';
        $this->rules['LugarExpedicion'] = 'R';
        $this->rules['Serie'] = 'O';
        $this->rules['Folio'] = 'O';
        $this->rules['CondicionesDePago'] = 'O';
        $this->rules['Descuento'] = 'O';
        $this->rules['MotivoDescuento'] = 'O';
        $this->rules['TipoCambio'] = 'O';
        $this->rules['NumCtaPago'] = 'O';
        $this->rules['FolioFiscalOrig'] = 'O';
        $this->rules['SerieFolioFiscalOrig'] = 'O';
        $this->rules['FechaFolioFiscalOrig'] = 'O';
        $this->rules['MontoFolioFiscalOrig'] = 'O';
    }
}
