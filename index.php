<?php

include_once './CFDI.php';

class Main
{
    // Convertimos las variables $cfdi_xml y $array_data en públicas para poder acceder a su contenido dentro de los métodos de la case de «Main»
    public $cfdi_xml;
    public $array_data = [
        "Comprobante" => [
            "LugarExpedicion" => "64000",
            "TipoDeComprobante" => "i",
            "Moneda" => "MXN",
            "SubTotal" => "100",
            "Total" => "116",
            "FormaPago" => "01",
            "NoCertificado" => "00000010101010101",
            "Fecha" => "2021-10-06 11:00:00"
        ],
        "Emisor" => [
            "Rfc" => "TME960709LR2",
            "Nombre" => "Tracto Camiones", // Se editó esta línea de: "Tracto Camiones s.a de c.v" a "Tracto Camiones" para cumplir con el output especificado en las instrucciones
            "RegimenFiscal" => "612"
        ]
    ];

    public function __construct() // Pasamos el método constructor de la clase «Main» a público
    {
        $this->cfdi_xml = new CFDI;
    }

    public function createXML()
    {
         //Obtener el XML por medio de la clase XML
        foreach ($this->array_data as $key => $value) :
            // Si la key del array es "Comprobante"...
            if ($key == (string) 'Comprobante') :
                // Loopeamos sus propiedades
                foreach ($value as $attribute => $value) :
                    // Seteamos los attributos para el emisor
                    $this->cfdi_xml->comprobante->setAtribute($attribute, $value);
                endforeach;
            else:
                // Si la key del array es "Emisor"...
                if ($key == (string) 'Emisor') :
                    // Loopeamos sus propiedades
                    foreach ($value as $attribute => $value) :
                        // Setteamos los attributos para el comprobante
                        $this->cfdi_xml->emisor->setAtribute($attribute, $value);
                    endforeach;
                endif;
            endif;
        endforeach;

        // Imprimimos el XML resultante gracias al método «getNode()» de la clase CFDI
        echo $this->cfdi_xml->getNode();
    }
}

try {
    $main = new Main;
    $main->createXML();
} catch (\Exception $error) {
    echo $error->getMessage();
}
