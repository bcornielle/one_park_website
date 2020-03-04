<?php

namespace Faker\Provider\th_TH;

class Address extends \Faker\Provider\Address
{
    protected static $cityPrefix = array(
        'เมือง', 'หมู่บ้าน', 'ท่า',
    );

    protected static $citySuffix = array(
        'เหนือ', 'ใต้', 'บุรี',
    );

    protected static $buildingNumber = array(
        '#####', '####', '###', '##', '##/###',
    );

    protected static $streetPrefix = array(
        'ซอย', 'ถนน', 'สะพาน', 'วงเวียน', 'แยก',
    );

    protected static $postcode = array('#####');

    /**
     * @var array Thai province names
     * @link https://th.wikipedia.org/wiki/%E0%B8%88%E0%B8%B1%E0%B8%87%E0%B8%AB%E0%B8%A7%E0%B8%B1%E0%B8%94%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%97%E0%B8%A8%E0%B9%84%E0%B8%97%E0%B8%A2
     */
    protected static $province = array(
        'กระบี่', 'กรุงเทพมหานคร', 'กาญจนบุรี', 'กาฬสินธุ์', 'กำแพงเพชร', 'ขอนแก่น',
        'จันทบุรี', 'ฉะเชิงเทรา', 'ชลบุรี', 'ชัยนาท', 'ชัยภูมิ', 'ชุมพร',
        'ตรัง', 'ตราด', 'ตาก', 'นครนายก', 'นครปฐม', 'นครพนม', 'นครราชสีมา',
        'นครศรีธรรมราช', 'นครสวรรค์', 'นนทบุรี', 'นราธิวาส', 'น่าน',
        'บึงกาฬ', 'บุรีรัมย์', 'ปทุมธานี', 'ประจวบคีรีขันธ์', 'ปราจีนบุรี', 'ปัตตานี',
        'พระนครศรีอยุธยา', 'พะเยา', 'พังงา', 'พัทลุง', 'พิจิตร', 'พิษณุโลก', 'ภูเก็ต',
        'มหาสารคาม', 'มุกดาหาร', 'ยะลา', 'ยโสธร', 'ระนอง', 'ระยอง', 'ราชบุรี', 'ร้อยเอ็ด',
        'ลพบุรี', 'ลำปาง', 'ลำพูน', 'ศรีสะเกษ', 'สกลนคร', 'สงขลา', 'สตูล', 'สมุทรปราการ', 'สมุทรสงคราม',
        'สมุทรสาคร', 'สระบุรี', 'สระแก้ว', 'สิงห์บุรี', 'สุพรรณบุรี', 'สุราษฎร์ธานี', 'สุรินทร์', 'สุโขทัย',
        'หนองคาย', 'หนองบัวลำภู', 'อำนาจเจริญ', 'อุดรธานี', 'อุตรดิตถ์', 'อุทัยธานี', 'อุบลราชธานี', 'อ่างทอง',
        'เชียงราย', 'เชียงใหม่', 'เพชรบุรี', 'เพชรบูรณ์', 'เลย', 'แพร่', 'แม่ฮ่องสอน',
    );

    /**
     * @var array Country names in Thai
     * @link https://th.wikipedia.org/wiki/%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B8%8A%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%97%E0%B8%A8_%E0%B8%94%E0%B8%B4%E0%B8%99%E0%B9%81%E0%B8%94%E0%B8%99_%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B9%80%E0%B8%A1%E0%B8%B7%E0%B8%AD%E0%B8%87%E0%B8%AB%E0%B8%A5%E0%B8%A7%E0%B8%87
     */
    protected static $country = array(
        'กรีซ', 'กัมพูชา', 'กัวเตมาลา', 'กาตาร์', 'คอซอวอ', 'คาซัคสถาน', 'คิริบาส', 'คิวบา', 'คีร์กีซสถาน', 'คูเวต',
        'จอร์เจีย', 'จอร์แดน', 'จาเมกา', 'จีน','ชิลี', 'ซานมารีโน', 'ซามัว', 'ซาอุดีอาระเบีย', 'ซีเรีย', 'ซูรินาม',
        'ญี่ปุ่น', 'ดอมินีกา', 'ตรินิแดดและโตเบโก', 'ตองกา', 'ติมอร์-เลสเต', 'ตุรกี', 'ตูวาลู', 'ทาจิกิสถาน',
        'นครรัฐวาติกัน', 'นอร์เวย์', 'นาอูรู', 'นิการากัว', 'นิวซีแลนด์', 'บราซิล', 'บรูไนดารุสซาลาม', 'บอสเนียและเฮอร์เซโกวีนา',
        'บังกลาเทศ', 'บัลแกเรีย', 'บาร์เบโดส', 'บาห์เรน', 'บาฮามาส', 'ปากีสถาน', 'ปานามา', 'ปาปัวนิวกินี', 'ปารากวัย', 'ปาเลา',
        'ฝรั่งเศส', 'พม่า', 'ฟิจิ', 'ฟินแลนด์', 'ฟิลิปปินส์', 'ภูฏาน', 'มองโกเลีย', 'มอนเตเนโกร', 'มอลตา','มอลโดวา', 'มัลดีฟส์', 'มาเลเซีย',
        'ยูเครน', 'รัสเซีย', 'ลักเซมเบิร์ก', 'ลัตเวีย', 'ลาว', 'ลิกเตนสไตน์','ลิทัวเนีย', 'ศรีลังกา',
        'สวิตเซอร์แลนด์', 'สวีเดน', 'สหรัฐอาหรับเอมิเรตส์', 'สหรัฐอเมริกา', 'สหราชอาณาจักร', 'สาธารณรัฐมาซิโดเนีย', 'สาธารณรัฐเช็ก', 'สาธารณรัฐโดมินิกัน',
        'สิงคโปร์', 'สเปน', 'สโลวาเกีย', 'สโลวีเนีย', 'หมู่เกาะมาร์แชลล์', 'หมู่เกาะโซโลมอน',
        'ออสเตรีย', 'ออสเตรเลีย', 'อันดอร์รา', 'อัฟกานิสถาน', 'อาร์มีเนีย', 'อาร์เจนตินา', 'อาเซอร์ไบจาน',
        'อิตาลี', 'อินเดีย', 'อินโดนีเซีย', 'อิรัก', 'อิสราเอล', 'อิหร่าน', 'อุซเบกิสถาน', 'อุรุกวัย', 'ฮอนดูรัส', 'ฮังการี',
        'เกรเนดา', 'เกาหลีเหนือ', 'เกาหลีใต้', 'เซนต์คิตส์และเนวิส', 'เซนต์ลูเซีย', 'เซนต์วินเซนต์และเกรนาดีนส์', 'เซอร์เบีย',
        'เดนมาร์ก', 'เติร์กเมนิสถาน', 'เนปาล', 'เนเธอร์แลนด์', 'เบลารุส', 'เบลีซ', 'เบลเยียม', 'เปรู', 'เม็กซิโก',
        'เยอรมนี', 'เยเมน', 'เลบานอน', 'เวียดนาม', 'เวเนซุเอลา', 'เอกวาดอร์', 'เอลซัลวาดอร์', 'เอสโตเนีย', 'เฮติ',  'แคนาดา',
        'แอนติกาและบาร์บูดา', 'แอลเบเนีย', 'โครเอเชีย', 'โคลอมเบีย', 'โบลิเวีย', 'โปรตุเกส', 'โปแลนด์', 'โมนาโก', 'โรมาเนีย',
        'โอมาน', 'ไซปรัส', 'ไทย', 'ไมโครนีเซีย', 'ไอซ์แลนด์', 'ไอร์แลนด์',
    );

    protected static $cityFormats = array(
        '{{cityPrefix}} {{firstName}}{{citySuffix}}',
        '{{cityPrefix}} {{firstName}}',
        '{{firstName}}{{citySuffix}}',
        '{{lastName}}{{citySuffix}}',
    );

    protected static $streetNameFormats = array(
        '{{firstName}} {{streetSuffix}}',
        '{{lastName}} {{streetSuffix}}'
    );

    protected static $streetAddressFormats = array(
        '{{buildingNumber}} {{streetName}}',
    );
    
    protected static $addressFormats = array(
        "{{streetAddress}}\n{{city}}, {{postcode}}",
    );

    /**
     * @example 'เมือง'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    /**
     * @example 'กรุงเทพมหานคร'
     */
    public static function province()
    {
        return static::randomElement(static::$province);
    }
}
