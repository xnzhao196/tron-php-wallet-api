<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Tron.proto

namespace GPBMetadata\Core;

class Tron
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Core\Discover::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aac190a0f636f72652f54726f6e2e70726f746f120870726f746f636f6c" .
            "1a13636f72652f446973636f7665722e70726f746f22b8020a074163636f" .
            "756e7412140a0c6163636f756e745f6e616d6518012001280c12230a0474" .
            "79706518022001280e32152e70726f746f636f6c2e4163636f756e745479" .
            "7065120f0a076164647265737318032001280c120f0a0762616c616e6365" .
            "18042001280312250a05766f74657318052003280b32162e70726f746f63" .
            "6f6c2e4163636f756e742e566f7465122b0a05617373657418062003280b" .
            "321c2e70726f746f636f6c2e4163636f756e742e4173736574456e747279" .
            "121c0a146c61746573745f6f70726174696f6e5f74696d65180a20012803" .
            "1a300a04566f746512140a0c766f74655f6164647265737318012001280c" .
            "12120a0a766f74655f636f756e741802200128031a2c0a0a417373657445" .
            "6e747279120b0a036b6579180120012809120d0a0576616c756518022001" .
            "28033a02380122b5010a075769746e657373120f0a076164647265737318" .
            "012001280c12110a09766f7465436f756e74180220012803120e0a067075" .
            "624b657918032001280c120b0a0375726c18042001280912150a0d746f74" .
            "616c50726f647563656418052001280312130a0b746f74616c4d69737365" .
            "6418062001280312160a0e6c6174657374426c6f636b4e756d1807200128" .
            "0312150a0d6c6174657374536c6f744e756d180820012803120e0a066973" .
            "4a6f6273180920012808222d0a0854584f7574707574120d0a0576616c75" .
            "6518012001280312120a0a7075624b65794861736818022001280c22780a" .
            "075458496e70757412270a087261775f6461746118012001280b32152e70" .
            "726f746f636f6c2e5458496e7075742e72617712110a097369676e617475" .
            "726518042001280c1a310a03726177120c0a047478494418012001280c12" .
            "0c0a04766f7574180220012803120e0a067075624b657918032001280c22" .
            "300a0954584f75747075747312230a076f75747075747318012003280b32" .
            "122e70726f746f636f6c2e54584f757470757422f9060a0b5472616e7361" .
            "6374696f6e122b0a087261775f6461746118012001280b32192e70726f74" .
            "6f636f6c2e5472616e73616374696f6e2e72617712110a097369676e6174" .
            "75726518022003280c12290a0372657418052003280b321c2e70726f746f" .
            "636f6c2e5472616e73616374696f6e2e526573756c741a80030a08436f6e" .
            "747261637412390a047479706518012001280e322b2e70726f746f636f6c" .
            "2e5472616e73616374696f6e2e436f6e74726163742e436f6e7472616374" .
            "5479706512270a09706172616d6574657218022001280b32142e676f6f67" .
            "6c652e70726f746f6275662e416e79228f020a0c436f6e74726163745479" .
            "706512190a154163636f756e74437265617465436f6e7472616374100012" .
            "140a105472616e73666572436f6e7472616374100112190a155472616e73" .
            "6665724173736574436f6e7472616374100212150a11566f746541737365" .
            "74436f6e7472616374100312170a13566f74655769746e657373436f6e74" .
            "72616374100412190a155769746e657373437265617465436f6e74726163" .
            "74100512160a1241737365744973737565436f6e7472616374100612120a" .
            "0e4465706c6f79436f6e7472616374100712190a155769746e6573735570" .
            "64617465436f6e7472616374100812210a1d506172746963697061746541" .
            "737365744973737565436f6e747261637410091a650a06526573756c7412" .
            "0b0a03666565180120012803122e0a0372657418022001280e32212e7072" .
            "6f746f636f6c2e5472616e73616374696f6e2e526573756c742e636f6465" .
            "221e0a04636f6465120a0a065355434553531000120a0a064641494c4544" .
            "10011ae1010a0372617712330a047479706518012001280e32252e70726f" .
            "746f636f6c2e5472616e73616374696f6e2e5472616e73616374696f6e54" .
            "79706512150a0d7265665f626c6f636b5f6e756d18032001280312160a0e" .
            "7265665f626c6f636b5f6861736818042001280c12120a0a657870697261" .
            "74696f6e180820012803120c0a0464617461180a2001280c12300a08636f" .
            "6e7472616374180b2003280b321e2e70726f746f636f6c2e5472616e7361" .
            "6374696f6e2e436f6e7472616374120f0a0773637269707473180c200128" .
            "0c12110a0974696d657374616d70180e2001280322310a0f5472616e7361" .
            "6374696f6e54797065120c0a085574786f54797065100012100a0c436f6e" .
            "747261637454797065100122d4010a0b426c6f636b486561646572122b0a" .
            "087261775f6461746118012001280b32192e70726f746f636f6c2e426c6f" .
            "636b4865616465722e72617712190a117769746e6573735f7369676e6174" .
            "75726518022001280c1a7d0a0372617712110a0974696d657374616d7018" .
            "012001280312120a0a747854726965526f6f7418022001280c12120a0a70" .
            "6172656e744861736818032001280c120e0a066e756d6265721807200128" .
            "0312120a0a7769746e6573735f696418082001280312170a0f7769746e65" .
            "73735f6164647265737318092001280c22610a05426c6f636b122b0a0c74" .
            "72616e73616374696f6e7318012003280b32152e70726f746f636f6c2e54" .
            "72616e73616374696f6e122b0a0c626c6f636b5f68656164657218022001" .
            "280b32152e70726f746f636f6c2e426c6f636b486561646572227c0a0e43" .
            "6861696e496e76656e746f7279122d0a0369647318012003280b32202e70" .
            "726f746f636f6c2e436861696e496e76656e746f72792e426c6f636b4964" .
            "12120a0a72656d61696e5f6e756d1802200128031a270a07426c6f636b49" .
            "64120c0a046861736818012001280c120e0a066e756d6265721802200128" .
            "0322bf010a0e426c6f636b496e76656e746f7279122d0a03696473180120" .
            "03280b32202e70726f746f636f6c2e426c6f636b496e76656e746f72792e" .
            "426c6f636b4964122b0a047479706518022001280e321d2e70726f746f63" .
            "6f6c2e426c6f636b496e76656e746f72792e547970651a270a07426c6f63" .
            "6b4964120c0a046861736818012001280c120e0a066e756d626572180220" .
            "01280322280a045479706512080a0453594e431000120b0a074144565449" .
            "5345100112090a0546455443481002226e0a09496e76656e746f7279122f" .
            "0a047479706518012001280e32212e70726f746f636f6c2e496e76656e74" .
            "6f72792e496e76656e746f727954797065120b0a0369647318022003280c" .
            "22230a0d496e76656e746f72795479706512070a03545258100012090a05" .
            "424c4f434b100122e5010a054974656d7312260a04747970651801200128" .
            "0e32182e70726f746f636f6c2e4974656d732e4974656d54797065121f0a" .
            "06626c6f636b7318022003280b320f2e70726f746f636f6c2e426c6f636b" .
            "122c0a0d626c6f636b5f6865616465727318032003280b32152e70726f74" .
            "6f636f6c2e426c6f636b486561646572122b0a0c7472616e73616374696f" .
            "6e7318042003280b32152e70726f746f636f6c2e5472616e73616374696f" .
            "6e22380a084974656d5479706512070a03455252100012070a0354525810" .
            "0112090a05424c4f434b1002120f0a0b424c4f434b484541444552100322" .
            "340a1144796e616d696350726f70657274696573121f0a176c6173745f73" .
            "6f6c69646974795f626c6f636b5f6e756d18012001280322390a11446973" .
            "636f6e6e6563744d65737361676512240a06726561736f6e18012001280e" .
            "32142e70726f746f636f6c2e526561736f6e436f646522410a0c48656c6c" .
            "6f4d65737361676512200a0466726f6d18012001280b32122e70726f746f" .
            "636f6c2e456e64706f696e74120f0a0776657273696f6e1802200128052a" .
            "370a0b4163636f756e7454797065120a0a064e6f726d616c1000120e0a0a" .
            "417373657449737375651001120c0a08436f6e747261637410022a9f020a" .
            "0a526561736f6e436f6465120d0a095245515545535445441000120d0a09" .
            "5443505f4552524f52100112100a0c4241445f50524f544f434f4c100212" .
            "100a0c5553454c4553535f50454552100312120a0e544f4f5f4d414e595f" .
            "5045455253100412120a0e4455504c49434154455f50454552100512190a" .
            "15494e434f4d50415449424c455f50524f544f434f4c100612110a0d4e55" .
            "4c4c5f4944454e54495459100712100a0c504545525f51554954494e4710" .
            "0812170a13554e45585045435445445f4944454e54495459100912120a0e" .
            "4c4f43414c5f4944454e54495459100a12100a0c50494e475f54494d454f" .
            "5554100b120f0a0b555345525f524541534f4e100c12090a055245534554" .
            "1010120c0a07554e4b4e4f574e10ff0142470a0f6f72672e74726f6e2e70" .
            "726f746f73420850726f746f636f6c5a2a6769746875622e636f6d2f7472" .
            "6f6e70726f746f636f6c2f676f2d636c69656e742d6170692f636f726562" .
            "0670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

