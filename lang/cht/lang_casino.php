<?php

$lang_casino = array
(
	'head_casino' => "皇家賭場",
	'std_error' => "錯誤",
	'std_sorry' => "對不起...",
	'std_casino_disabled' => "賭場系統未開啟",
	'std_must_login_to_play' => "必須登陸才能進入皇家賭場",
	'std_permission_denied' => "許可權不夠! Power User以上等級使用者才能進入皇家賭場",
	'std_or_above_can_view' => "以上等級使用者才能進入皇家賭場",
	'std_bonus_not_enough' => "魔力值少於".$casino_min_bonus_tweak."不能進入皇家賭場",
	'tab_intro' => "遊戲介紹",
	'tab_game_name' => "皇家賭場",
	'tab_winner' => "獲勝者",
	'tab_my_casino' => "我的戰績",
	'tab_mod' => "管理",
	'col_add_time' => "添加時間",
	'col_end_time' => "結束時間",
	'col_paid_time' => "清盤時間",
	'col_title' => "盤口名稱",
	'col_remaining_time' => "剩餘下注時間",
	'col_state' => "狀態",
	'col_added_by' => "添加人",
	'col_total_count' => "參與人數",
	'col_winner_count' => "獲勝人數",
	'col_padding' => "待清盤的盤口",
	'col_mod' => "管理盤口",
	'col_id' => "序號",
	'col_stake' => "賭注",
	'col_option' => "我的選項",
	'col_result' => "結果",
	'col_bonus_count' => "淨勝負",
	'text_intro' => "<b>歡迎來到".$SITENAME."皇家賭場！您可以使用您的魔力值在這裡參與遊戲。</b><br /><br /><b><a>遊戲規則：</a></b><br />1. 魔力值低於".$casino_min_bonus_tweak."或者".get_user_class_name($casino_class,false,true,true)."以下等級使用者不能進入賭場。<br />2. 每次您下注的數額只能在100與2000之間。<br />3. 一旦下注，系統會自動從您的帳號扣除相應魔力值。<br />4. 如果有什麼疑問，請到論壇相應版面諮訊。<br /><br /><b><a>遊戲說明：</a></b><br />下注後，如果您選擇了正確的選項，系統會返還給您贏得的魔力值；如果您輸了，您會輸掉您的賭注。<br />例如：您選擇了某個盤口的一個選項，下注100，該選項賠率是2.3。<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;如果您贏了，您將贏得100*2.3=230點魔力值，淨賺130點魔力值；如果您輸了，您將失去100點魔力值。",
	'text_ended' => "已結束",
	'text_active' => "正在進行",
	'text_stopped' => "被管理員凍結",
	'text_paid' => "已清盤",
	'text_bets_laid' => "已下注",
	'text_new_bet' => "添加新盤口",
	'text_no_record' => "沒有記錄",
	'text_win' => "勝",
	'text_lose' => "負",
	'text_win_bonus' => "淨勝負",
	'text_uncleared' => "尚未清盤",
	'text_view' => "查看",
	'text_push' => "走水",
	'pre_page' => "上一頁",
	'next_page' => "下一頁",
);

?>
