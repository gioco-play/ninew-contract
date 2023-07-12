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
    function gameLaunch(string $opCode, string $account, string $gameCode, ?string $backUrl = null): array;

    /**
     * 營商帳號轉換為遊戲商帳號
     * @param string $opCode
     * @param array $vendor
     * @param string $memberCode
     * @return array
     */
    function accountToVendor(string $opCode, array $vendor, string $memberCode): array;

    /**
     * 遊戲商帳號轉換為營商帳號
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
}