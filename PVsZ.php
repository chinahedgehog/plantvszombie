<?php

/**
 * @desc  :
 * @Author:WangXiaohua creates the file in 2020/6/13
 * @Email :123695033@qq.com(Wechat && QQ)
 */
class PVsZ {
    //private $req;
    //private $e;
    //private $ev;
    //private $config;
    //
    //'req' => [
    //        'e' => 'cmd'
    //    ]
    private $cmdList = [
        //无尽商店获取药水命令
        'V222' => [
            //买甜菜,返回碎片
            'Rdgz' => '{"i":"V222","r":0,"e":"tcgfdcCdWuR-lHphksBEUHwD1QLCh4nHFWlaayYTXJHaUWrHbeoOIop4m2r-eQd25WI1MKsHVkY8PLx3KKuWk4KGPR_-FANYsW4xKYjM8Yj4MAmNCG5zvT9BpR8D08dbLrsANgiF9F6g3_APMC1vvOhN9-tjYkTybPKpSatms7vIQbJofooo6LN1hGTmxP9T"}',
            //绿药水碎片
            'xRev' => '{"i":"V222","r":0,"e":"tcgfdcCdWuR-lHphksBEUHwD1QLCh4nHaaxcDTXln0nJB7qNw9V88zBGjgFvCqvG2V44PJPanUQpyhUNxuWQpMnyOO6h6JHixpJBxcZV1tDakCqZRLbbVOLNFn_jc2yxfPSYjDL97LVVAXX98NWIa5qWVJvMmGTd4kdNa_fwrTGVHuLk4jHNLwQe4Za4vWQ9"}',
            //橙
            'jyro' => '{"i":"V222","r":0,"e":"tcgfdcCdWuR-lHphksBEUHwD1QLCh4nHaaxcDTXln0nJB7qNw9V88zBGjgFvCqvGLhLrVtZiSMCpg5lKP4wQxN8Sg09fjSlVlKzzyqbf0ERBqS_SWCyGUEfDF4BQv831v8wyDztHnxaFUdVe6YJ3DCrwdU7yzydo66qmr96Xkh-HC7Ijh0Yg24_Rd1tZKRzG"}',
            //蓝
            'Ekub' => '{"i":"V222","r":0,"e":"tcgfdcCdWuR-lHphksBEUHwD1QLCh4nHaaxcDTXln0nJB7qNw9V88zBGjgFvCqvGuGLSAVsSA1Ht_SanGh3cyPkJiNLqWqJ2AREUdFj6Ejd7iVQh5Uaa_NriHqBCr_MkUWIFLzmNxl3djNO1YZzTjey3VKZRLW5CvsPnicOzj__UDT8T1jXAs1VScjyRuBlo"}',
            //紫色
            'IWRu' => '{"i":"V222","r":0,"e":"tcgfdcCdWuR-lHphksBEUHwD1QLCh4nHaaxcDTXln0nJB7qNw9V88zBGjgFvCqvG0ycyzDd_6HNuJ15LSgy85VPSAjHPVS5hk-VcHisZsQFVpVn4QgkmkddBFlYaWOraBS5SwdjguObGwcymVjebxFdiISwXFA_FmRK2_DOl05oWS5poqt-epBm1_bBl1Wqs"}',

            //蓝色药水列表
            //'return' => '{"i":"V222","r":0,"e":"tcgfdcCdWuR-lHphksBEUHwD1QLCh4nH_iDjQJ5CmegUqoOXC8_UUAIPenoTCnCNXPpx0OoXg8iB1dXAPYfJ_LRoopZLE7GKfPHgMJrbHK1nrd-ZODuW7tmwaHJkTjk4mzce8fbCfUcuxR9At6pym1cu9-BiQ9xcSnMg2w9rpvVFPhLSd7lzQP1v17J8PaH9pFnz_Exieg6u5ECKMZbAFCm1ghy6HG2j4BdrRGCYEz7EEKmme-lnZTTIwiKQohZUnAV_pBEidDe2GuEt9QshT8isVmG7B1N0k65fd9Mn_c0OtxRtQo2G4oyCAtDh3R5hdomWc47FnLKDdu8VyTDu8xcFDwUg3NY02kKnMZvyCsHsvtW0vv71bIyZFJjm2HKF8GTQ-yns-K9ss0blBJQ0UXr6wZX0SXHK_sNKgoP09Bgv1C30AIJEQjZK1ibW9MzLVZiLzSRNdHdo8yEAGS5X4xedOLTvtQMqB92BtWl4tg96hPWE-OfMe8ow1U0s-H9ilyos8nzyPa908AAB3EKMZP2PH7o5XPMjkc3-bpSAWpOSOEGT7muqcMUuwvijy4FNkAHekRo7lBdUEBuNEbaXIBDwnTxsVd1I2CFIuombQjf9y_9kgopciU1o9acenVuvClLzIrWVuduRakcFlSz1SugkhMsdqQ6kNGBS4HAjae4FR4QSlDRnxDNkv4qbPDn5Im-REcd4JNeM5LisqUam4jdvUwhMFT6leNGPQqBTSmCTbeRLgc3JuEabN85WXmGN5ucuomn-TikJVTLeD5I8xgRl4ZY8-vnJKDkUde53uE6hm_iSZGrbMD6zydvd2TOW"}',
            //紫色药水列表
            //'return' => '{"i":"V222","r":0,"e":"tcgfdcCdWuR-lHphksBEUHwD1QLCh4nH_iDjQJ5CmegUqoOXC8_UUAIPenoTCnCNZR318OWJkDgfbxL-yY8giiLAyL3OUD8m0AEDClVmQXaR_nfzayA0DnR7t8YqEtc37zMxGc3XeMySoa-PTz4OmM0ppPzdZOGjDwF7yFUElkVX5-3YGSoWdQ7Kd-is6OBv3Riz8uMcUnLYFuJ_KgL7dMt0VktTWiu_SUMgYuj4PWZ4F2t81yPlZvN7N9Wpp5tpSVMdiLB3Q5bcIcwu57wgc97bii_pGLnqLHPqLgzgsROm7LSPphB4-sR_SRTpB-6w9wmH_LNiB-qJa9yxRj4Cml1y2_Jj6n1aR0b1_l9lAZoH40M9r0pxfdr9uVTzwq5OwwnMuqOM7LJy7EoaQAeo9UuLnD8N1Z5-4zNOOnBCRBbLgAi7jb-IhTUO20esmKUxXXl_7sstEC0ObYSeCLL7B1fAVmbB5BmEs34pRigpHCLtDSbuJQrVdb74PdgHwPvccf7EVP-J2w0xJwvGiERwz4zc0GzJdlR3zXEVaMxw71QvQhyaHtyqiUiXTa--8JCSOcttnLyT9k5jpR4ryf2LYmSPXeb1aTCCnUz0CVSjcQwpYNeGpv7Y2EHURQwDjLqKTyNj-NuiOuhWL4aB27bVva83PaJwr7feWw7A9n60r3981RuvgWRRat5eDUKkbFAmhirqrkI9JJqcNDvIbKUZWLM2RXOGW2pZc5su3cieAdVmhK01Fs5QYRAskUAgIpi_5KL3qrwqQUOKjeUYS533GnoJ9kkzGV61UNerbPAgMSFSU5vXJAykkiwUUT8vX5GB"}',
            //
            'return' => '{"i":"V222","r":0,"e":"tcgfdcCdWuR-lHphksBEUHwD1QLCh4nH_iDjQJ5CmegUqoOXC8_UUAIPenoTCnCNXPpx0OoXg8iB1dXAPYfJ_LRoopZLE7GKfPHgMJrbHK1nrd-ZODuW7tmwaHJkTjk4mzce8fbCfUcuxR9At6pym1cu9-BiQ9xcSnMg2w9rpvVFPhLSd7lzQP1v17J8PaH9pFnz_Exieg6u5ECKMZbAFCm1ghy6HG2j4BdrRGCYEz7EEKmme-lnZTTIwiKQohZUnAV_pBEidDe2GuEt9QshT8isVmG7B1N0k65fd9Mn_c0OtxRtQo2G4oyCAtDh3R5hdomWc47FnLKDdu8VyTDu8xcFDwUg3NY02kKnMZvyCsHsvtW0vv71bIyZFJjm2HKF8GTQ-yns-K9ss0blBJQ0UXr6wZX0SXHK_sNKgoP09Bgv1C30AIJEQjZK1ibW9MzLVZiLzSRNdHdo8yEAGS5X4xedOLTvtQMqB92BtWl4tg96hPWE-OfMe8ow1U0s-H9ilyos8nzyPa908AAB3EKMZP2PH7o5XPMjkc3-bpSAWpOSOEGT7muqcMUuwvijy4FNkAHekRo7lBdUEBuNEbaXIBDwnTxsVd1I2CFIuombQjf9y_9kgopciU1o9acenVuvClLzIrWVuduRakcFlSz1SugkhMsdqQ6kNGBS4HAjae4FR4QSlDRnxDNkv4qbPDn5Im-REcd4JNeM5LisqUam4jdvUwhMFT6leNGPQqBTSmCTbeRLgc3JuEabN85WXmGN5ucuomn-TikJVTLeD5I8xgRl4ZY8-vnJKDkUde53uE6hm_iSZGrbMD6zydvd2TOW"}',
        ],
        //心跳请求
        'V206' => '{"i":"V206","r":0,"e":"JJUEBehJSTrViqZKlNAfFOJCWlWrGjpx-G9Ll7j448ydO1yu64s_Vx8Gwz4mu0Fv"}',
        //无尽商店列表
        'V303' => '{"i":"V303","r":0,"e":"hP7DsJi7kozih-8jQAewZRALs8q_b9RTO_I0RJNUfDkW3e7kiEH1KhKtnVj7X-IpDemVgCTK3R0TO26Pk4MMv3hOVp2uApGvKbX6Wiz8NnSMLRoUFlPT9mcRPPxN_XtQXpxL-d-jSk_ZIucXDpkWpzZVlsD_tOi95Hk66ayLeSaPrVfjMrI4Lb5HxFYxnyJdljYjpIE_VRTlk20mjCeE9bDgB6PFBF_-59X_KfS16arem1QIo88CQdbah_h4PqiSo_f3xtqN43K2ltQ9dvjvfLh2pf9tIGAxiVuJPqjQd7fk6WocCDbEvcHlD6VAyNmoOPbuDPhJw4UTwO20V-om1NXQDSB7RFLFMiv5rHrKxXcD9mEr78ITwIvACFxkxCUa9BsAuhSbTjQIbnIpY7tOWrRsFYd926o3LwU9p9JwUEE00NGn14cWZxMqqT5UMyou8vQLOvfs78OYXIAx4W0EENa9qqZvRsPGq2RhmimIv8x5M6jjd8B8ezTzM5_A2ZysMzcB1akSB7OeNedFzxi_a_YguvEkHN5hvwolis07C5_ElOU6W2keXeyOPdGUu3vEcbXmIzM3ePSmrbMId6HNEwXpiYISrkcgm52n4RB9a_9JW0s_dVo8IMgmVxkk12t0i3aXrtye2ED38BeSxtO8L4IWuQ5r73p0xUYf5BRSj7NMt54VleavkcalH3ApeLdHC37Rd_-wDEIMVtUke1LeHXgT4BBNL47Bn3tX69eGKVTVGVYtKtNsb-kDQECVNcxTvKZawOiYR3Knd-nXMVquOYSFwmZ60zF6KY5XUAjzwgNLWRTpmkWAp48qOI83nG0CRvPjU_3DbFa1iIysGcs_S6fw08rcsep2jjA5rSXYdjQOSRDQeeQk-iFg341LuNEi86N1f2OI5wS4YwuIPvxVA9II5stGTwtFBIWSZRs7HiQ077lG1bUmdNER-yhonMVgkSyXu-T0NiXC0bvd8Dcmsil7IZWJntXFPTwfODw8pY8oN4--AGPP2fa-BfshQJluO0BYhRbkItlsVp17RMR3oiIQngom-1XOGQvL_FprRaZOe9PQxqwtDU3HY4Ucv6ZIe7dpHgwb_Lzp3ubryeTRouKGUoMbQ_JWxqF-SFXjZf_BlY8_GA88vlmJpTse5JdzPVVhCZ2-eVvLLbFskq0V_2x_ZgSQM8ncSf1rBXWyGvpXnFXYqQQnRjJe5jbFpzBE24lVigzoc4j5b7PP6d1WW6dLN8vg9eZcLyFA5E8xJXW7EBQDEij-AMYU9lElnkDd"}',

        //钻石摇奖 返回植物
        'V322' => [

        ],

    ];
    //
    //public function __construct() {
    //
    //}
    //
    //private function parseCmd() {
    //    $this->req = $_POST['req'];
    //    $this->e   = $_POST['e'];
    //    $this->ev  = $_POST['ev'];
    //}
    //
    //private function getResponseCmd() {
    //}

    public function runLocal() {

        $mysql = new Mysql();
        $config = $mysql->find("select * from config");

        if (!$config) exit('未获取到配置,请在表config加一条记录');

        if ($config['type'] == 3) {//直返
            exit($config['response']);
        }
//非白名单. 直接拉黑
        $writeList = [
            'cloud.pvz2android.popcap.com.cn',
            'www.zw.com',
            'pvz2android.intelligent.popcap.com.cn',
        ];
        $host      = !empty($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
        $host      = rtrim($host, ':80');
        if (!in_array($host, $writeList)) exit($host);


        $remoteUrl = 'http://123.59.94.67/index.php';//原始文件
        $sql = "select * from request where ev='{$_POST['ev']}' and  e='{$_POST['e']}' and req='{$_POST['req']}' order by id desc ";//取最新


        if($config['type'] == 2 and  (
                $_POST['req'] =='V205' ||
                $_POST['req'] =='I4' ||
                $_POST['req'] =='V202'
            )) {//本地模式,注意永远使用本地模式
            $sql = "select * from request where ev='{$_POST['ev']}' and  req='{$_POST['req']}' order by id desc ";
        }
        $mysql = new Mysql();
        $exists = $mysql->query($sql);
        if ($exists) $exists = $exists[0];

        if ($config['type'] > 50) {
            return $this->liquid($config['type']);
        }
        if ($config['type'] == 1 || $config['type'] == 4) {//1本地+远程   2,断网模式 只显示本地 3直返模式
            if ($config['type'] == 4) $exists = false;//纯网络模式, 直接认为本地不存在,一般用于更新状态
            if (!$exists) {//不存在,则请求原生服务器并本地生成
                //$result = (Http::curlPost($remoteUrl, $_POST)); //不管是否存在,直接请求数据
                $result = (Http::socketPost($remoteUrl, $_POST)); //不管是否存在,直接请求数据
                $sql = "insert into request set ev='{$_POST['ev']}', e='{$_POST['e']}', req='{$_POST['req']}', response='{$result}', create_time=" . time();
                $mysql->execute($sql);
                $exists['response'] = $result;
            }
            exit($exists['response']);//直接回显代理数据

        }


        empty($exists['response']) ? $exists['response'] ='' : '{}';


        if ($config['type'] == 2) {
            $_POST['req'] == 'V206'  &&  exit('{"i":"V206","r":0,"e":"JJUEBehJSTrViqZKlNAfFOJCWlWrGjpx-G9Ll7j448ydO1yu64s_Vx8Gwz4mu0Fv"}');//直接回显代理数据
            $_POST['req'] == 'I4'  &&  exit('{"i":"I4","r":0,"d":{"t":"'.date('Y-m-d H:i:s', time()).'"}}');//直接回显代理数据



            exit($exists['response']  );//直接回显代理数据
        }
        if ($config['type'] == 4) {//纯网络
            $_POST['req'] == 'V206'  &&  exit('{"i":"V206","r":0,"e":"JJUEBehJSTrViqZKlNAfFOJCWlWrGjpx-G9Ll7j448ydO1yu64s_Vx8Gwz4mu0Fv"}');//直接回显代理数据
            exit($exists['response']  );//直接回显代理数据
        }






    }

    //刷药水模式
    public function liquid($type) {
       $req = $_POST['req'];
       $e   = $_POST['e'];
       $ev  = $_POST['ev'];
        if ($_POST['req'] == 'V222') { //获取无尽商店信息
            if (substr($e, 0, 4) == 'Rdgz') {//甜菜
                exit('{"i":"V222","r":0,"e":"tcgfdcCdWuR-lHphksBEUHwD1QLCh4nHFWlaayYTXJHaUWrHbeoOIop4m2r-eQd25WI1MKsHVkY8PLx3KKuWk4KGPR_-FANYsW4xKYjM8Yj4MAmNCG5zvT9BpR8D08dbLrsANgiF9F6g3_APMC1vvOhN9-tjYkTybPKpSatms7vIQbJofooo6LN1hGTmxP9T"}');
            }
            //绿
            if (substr($e, 0, 4) == 'xRev') {
                exit('{"i":"V222","r":0,"e":"tcgfdcCdWuR-lHphksBEUHwD1QLCh4nHaaxcDTXln0nJB7qNw9V88zBGjgFvCqvG2V44PJPanUQpyhUNxuWQpMnyOO6h6JHixpJBxcZV1tDakCqZRLbbVOLNFn_jc2yxfPSYjDL97LVVAXX98NWIa5qWVJvMmGTd4kdNa_fwrTGVHuLk4jHNLwQe4Za4vWQ9"}');
            }
            //橙色
            if (substr($e, 0, 4) == 'jyro') {
                exit('{"i":"V222","r":0,"e":"tcgfdcCdWuR-lHphksBEUHwD1QLCh4nHaaxcDTXln0nJB7qNw9V88zBGjgFvCqvGLhLrVtZiSMCpg5lKP4wQxN8Sg09fjSlVlKzzyqbf0ERBqS_SWCyGUEfDF4BQv831v8wyDztHnxaFUdVe6YJ3DCrwdU7yzydo66qmr96Xkh-HC7Ijh0Yg24_Rd1tZKRzG"}');
            }
            //蓝色
            if (substr($e, 0, 4) == 'Ekub') {
                exit('{"i":"V222","r":0,"e":"tcgfdcCdWuR-lHphksBEUHwD1QLCh4nHaaxcDTXln0nJB7qNw9V88zBGjgFvCqvGuGLSAVsSA1Ht_SanGh3cyPkJiNLqWqJ2AREUdFj6Ejd7iVQh5Uaa_NriHqBCr_MkUWIFLzmNxl3djNO1YZzTjey3VKZRLW5CvsPnicOzj__UDT8T1jXAs1VScjyRuBlo"}');
            }
            //紫色
            if (substr($e, 0, 4) == 'IWRu') {//
                exit('{"i":"V222","r":0,"e":"tcgfdcCdWuR-lHphksBEUHwD1QLCh4nHaaxcDTXln0nJB7qNw9V88zBGjgFvCqvG0ycyzDd_6HNuJ15LSgy85VPSAjHPVS5hk-VcHisZsQFVpVn4QgkmkddBFlYaWOraBS5SwdjguObGwcymVjebxFdiISwXFA_FmRK2_DOl05oWS5poqt-epBm1_bBl1Wqs"}');
            }
//魔音甜菜
            if ($type == 54) exit('{"i":"V222","r":0,"e":"tcgfdcCdWuR-lHphksBEUHwD1QLCh4nH_iDjQJ5CmegUqoOXC8_UUAIPenoTCnCNKjq6-mzY5X25boH2yk-4ux6YYE7phlwEe_NVwj8THDceVVZu78sUKeevT8XoOINPtVsthsbNECMxFw3Tfto9OFZw317RO7Rv5aJHeA14-T3b2j6ZzkSSA4R8wDtl4sihmVnuGQHBBwVouPSJG-X9D2MiqxpDRs3lhc8Bb2SSnyL5C-Vo6rTNCQHRS3Y_ay_UQY7f-YFvLWOACWcLPfshKyh7rp5sgSdIvJFNYRl6erSUSSoVyNEbMHly84C5HV89o3B7FzoPUNh_JtCEso6LPYXuQT99j-4zlEj6j8fbnNxIzOH1f38-4_74rWsyG-MU1pd3GfD4mY7IcGZu4bSoJUXkOQWjVnXUWB93zMTMcJaCTyRXNm3pqbJdwfcsNm0MivV8Mixojn3X-1ZsC3PByp0fasYvBBtheYxMwNFsxvN4C2SccHjMlR0WFLQOtJSeKQstiiTRqmSjKrafXJBtIuU3SLx6How_vrxExtlRFU5jJb_LwQsfJl_c4KtgPabaF_2DE0Wx1sB9olT7DMqiVH36FXxIscymOy_mcG10zS0MJKB38MUwzCONFO3-d5qN9yJtD2JRdOP2ZESY3V3Nrb2z--zgZyWHJ6M3LwcT7tFLMfA9u-wCHBuFkp8WgXvvybfRHavKNy65cUnLfvVkafw4t_Jj63madAUoJn4NM0OHZ6MeJTsf6CvxVy2cmOh-IXgoBJKLBKKpjCIeKQD9uvMN3ezSNDWjvV2guukGiL5Xv_0BaLqyTNOntnUe8X9a"}');
            //橙色+绿色
            if ($type == 51)exit('{"i":"V222","r":0,"e":"tcgfdcCdWuR-lHphksBEUHwD1QLCh4nH_iDjQJ5CmegUqoOXC8_UUAIPenoTCnCNKjq6-mzY5X25boH2yk-4ux6YYE7phlwEe_NVwj8THDceVVZu78sUKeevT8XoOINPtVsthsbNECMxFw3Tfto9OFZw317RO7RvRTQHY4EH-R0bfcDH_VdwtRdfnIBEHpByWHwyQQWaPjwAvYRERru2J4JIUyGmNWEttPZa18v1jPNF-2s8Xu3vX3zdBhRvcogk9JwjQVxnUePCACldWxsDtkuAB7ESeeau4FTdxX2giLdx4poMHyDFq_jnAGosY54pIBMnMWMjxeVU4-U6c27OcDfZUJHYlD9JJduTeXSXo9qTetXbcjcGDACsuyHpU2D_wktKvbd71JHY3-HPjnhxbDrhoua2jdEkVUvzMd2wGwYHHQC32jqDIs28-NdVuh88HfaN12aUdTxi_c3be_SpiR272LCNPwCWPydWZpCGMGxMNFuCNMASQCGp_PDRaSrq5Tf7q_nY5VPJ6oTPOdZizJ42S4Z-mooe7lYHleCrNCiEU8tJkVkTpltOgNqB7j7cLssHEU19VPXIOIOTqq-ISM6MzPI54JKUnvkhH_I1zy1AkslMOYvEXeUGyEhDo_TYk0N3mFd9eY7FTapJbP4oyLRzj6z_DDBJrjQiwO2PefcZX5_X4J7SbIlCaimL7KuC79y_iB9zZGUqvrT-b8ws4SxAnbm2g6neT7iVsJqByLODcyrtUyToFA4_bFwtPeIDWatCvMq9zyaYErL6xgSE0A4Z3lK8d1u9"}');//白,绿
            //蓝色药水
            if ($type == 52)exit('{"i":"V222","r":0,"e":"tcgfdcCdWuR-lHphksBEUHwD1QLCh4nH_iDjQJ5CmegUqoOXC8_UUAIPenoTCnCNXPpx0OoXg8iB1dXAPYfJ_LRoopZLE7GKfPHgMJrbHK1nrd-ZODuW7tmwaHJkTjk4mzce8fbCfUcuxR9At6pym1cu9-BiQ9xcSnMg2w9rpvVFPhLSd7lzQP1v17J8PaH9pFnz_Exieg6u5ECKMZbAFCm1ghy6HG2j4BdrRGCYEz7EEKmme-lnZTTIwiKQohZUnAV_pBEidDe2GuEt9QshT8isVmG7B1N0k65fd9Mn_c0OtxRtQo2G4oyCAtDh3R5hdomWc47FnLKDdu8VyTDu8xcFDwUg3NY02kKnMZvyCsHsvtW0vv71bIyZFJjm2HKF8GTQ-yns-K9ss0blBJQ0UXr6wZX0SXHK_sNKgoP09Bgv1C30AIJEQjZK1ibW9MzLVZiLzSRNdHdo8yEAGS5X4xedOLTvtQMqB92BtWl4tg96hPWE-OfMe8ow1U0s-H9ilyos8nzyPa908AAB3EKMZP2PH7o5XPMjkc3-bpSAWpOSOEGT7muqcMUuwvijy4FNkAHekRo7lBdUEBuNEbaXIBDwnTxsVd1I2CFIuombQjf9y_9kgopciU1o9acenVuvClLzIrWVuduRakcFlSz1SugkhMsdqQ6kNGBS4HAjae4FR4QSlDRnxDNkv4qbPDn5Im-REcd4JNeM5LisqUam4jdvUwhMFT6leNGPQqBTSmCTbeRLgc3JuEabN85WXmGN5ucuomn-TikJVTLeD5I8xgRl4ZY8-vnJKDkUde53uE6hm_iSZGrbMD6zydvd2TOW"}');//蓝色 200分
            //紫药水
            if ($type == 53)exit('	{"i":"V222","r":0,"e":"tcgfdcCdWuR-lHphksBEUHwD1QLCh4nH_iDjQJ5CmegUqoOXC8_UUAIPenoTCnCNZR318OWJkDgfbxL-yY8giiLAyL3OUD8m0AEDClVmQXaR_nfzayA0DnR7t8YqEtc37zMxGc3XeMySoa-PTz4OmM0ppPzdZOGjDwF7yFUElkVX5-3YGSoWdQ7Kd-is6OBv3Riz8uMcUnLYFuJ_KgL7dMt0VktTWiu_SUMgYuj4PWZ4F2t81yPlZvN7N9Wpp5tpSVMdiLB3Q5bcIcwu57wgc97bii_pGLnqLHPqLgzgsROm7LSPphB4-sR_SRTpB-6w9wmH_LNiB-qJa9yxRj4Cml1y2_Jj6n1aR0b1_l9lAZoH40M9r0pxfdr9uVTzwq5OwwnMuqOM7LJy7EoaQAeo9UuLnD8N1Z5-4zNOOnBCRBbLgAi7jb-IhTUO20esmKUxXXl_7sstEC0ObYSeCLL7B1fAVmbB5BmEs34pRigpHCLtDSbuJQrVdb74PdgHwPvccf7EVP-J2w0xJwvGiERwz4zc0GzJdlR3zXEVaMxw71QvQhyaHtyqiUiXTa--8JCSOcttnLyT9k5jpR4ryf2LYmSPXeb1aTCCnUz0CVSjcQwpYNeGpv7Y2EHURQwDjLqKTyNj-NuiOuhWL4aB27bVva83PaJwr7feWw7A9n60r3981RuvgWRRat5eDUKkbFAmhirqrkI9JJqcNDvIbKUZWLM2RXOGW2pZc5su3cieAdVmhK01Fs5QYRAskUAgIpi_5KL3qrwqQUOKjeUYS533GnoJ9kkzGV61UNerbPAgMSFSU5vXJAykkiwUUT8vX5GB"}');
        }
        return '';
    }
}