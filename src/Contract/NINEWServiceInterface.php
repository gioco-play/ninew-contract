<?php

namespace GiocoPlus\NINEW\Contract;

interface NINEWServiceInterface {
    /**
     * 遊戲啟動
     * @param string $op_code
     * @param string $account
     * @param string $game_code
     * @param string $language
     * @param string $vendor_code
     * @param string $back_url
     * @return array
     */
    function gameLaunch(string $op_code, string $account, string $game_code, string $language, string $vendor_code, string $back_url = null): array;
}