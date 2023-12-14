<?php

namespace GiocoPlus\NINEW\Contract;

interface NINEWServiceInterface {
    /**
     * 遊戲啟動
     * @param string $opCode
     * @param string $account
     * @param string $gameCode
     * @param ?string $backUrl
     * @return array
     */
    function gameLaunch(string $opCode, string $account, string $gameCode, string $backUrl = ""): array;

    /**
     * 營商帳號轉換為遊戲商帳號 (GF -> NINEW)
     * @param string $opCode
     * @param array $vendor
     * @param string $memberCode
     * @return array
     */
    function accountToVendor(string $opCode, array $vendor, string $memberCode): array;

    /**
     * 遊戲商帳號轉換為營商帳號 (NINEW -> GF)
     * @param string $opCode
     * @param array $vendor
     * @param string $vendorAccount
     * @return array
     */
    function accountToOperator(string $opCode, array $vendor, string $vendorAccount): array;

    /**
     * 取得錢包餘額
     * @param string $opCode
     * @param string $account
     * @return mixed
     */
    function getBalance(string $opCode, string $account);

    /**
     * 遊戲上分
     * @param string $opCode
     * @param string $account
     * @return mixed
     */
    function gameTransferIn(string $opCode, string $account);

    /**
     * 遊戲下分
     * @param string $opCode
     * @param string $account
     * @param float $amount
     * @return mixed
     */
    function gameTransferOut(string $opCode, string $account, float $amount);

    /**
     * 上/下分失敗 訂單檢核
     * @param string $op_code
     * @param string $order_no
     * @return mixed
     */
    function orderFailCheck(string $op_code, string $order_no);

    /**
     * 遊戲詳情
     * @param string $op_code
     * @param string $account
     * @param string $bet_id
     * @return mixed
     */
    function gameDetail(string $op_code, string $account, string $bet_id);

    /**
     * 抓取遊戲紀錄
     *
     * @param string $op_code
     * @param int $past_minutes
     * @param string $cache_key
     * @return mixed
     */
    function betLogGrabber(string $op_code, int $past_minutes, string $cache_key);

    /**
     * 全營商 抓取遊戲紀錄
     *
     * @param int $past_minutes
     * @return mixed
     */
    function betLogGrabberAll(int $past_minutes);
}