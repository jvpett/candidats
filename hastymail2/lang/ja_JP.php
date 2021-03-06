<?php

/*  en_US.php: English interface translation
    Copyright (C) 2002-2010  Hastymail Development group

    This file is part of Hastymail.

    Hastymail is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    Hastymail is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Hastymail; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

* $Id:$
*/

$strings = array(

/* interface strings */
    0 => 'HM2',
    1 => 'Debug',
    2 => 'About',       // 286
    3 => '新規',                // Compose      // 15
    4 => 'オプション',          // Options      // 12
    5 => 'ログアウト',          // Logout       // 16
    6 => 'ログイン',            // Login        // 92
    7 => 'フォルダー',          // Folders      // 13
    8 => 'アドレス帳',          // Contacts     // 14
    9 => '検索',                // Search       // 11
    10 => 'New',        // 10
    11 => 'メール・ボックスが見つかりません',   // Could not find the selected mailbox
    12 => 'メール・アドレス',   // Email Address    // 101
    13 => '件名',               // Subject // 21
    14 => '本文',               // Message // 26
    15 => 'Submit',
    16 => 'Email',
    17 => '署名',               // Sign // 164
    18 => '保存',               // Save // 163
    19 => '送信',               // Send // 162
    20 => 'ページがみつかりません',     // Page Not Found
    21 => 'Login Again',    // 96
    22 => 'Mailbox',        // 220
    23 => '表示',               // Browse
    24 => '検索文字',           // For
    25 => 'Go',             // 5    // Don't translate it into Japanese, because it's used differrent meanings for the caption of some buttons.
    26 => '変更禁止',           // Freeze
    27 => 'ユーザーID',         // Username   // 93
    28 => 'パスワード',         // Password   // 94
    29 => 'パスワード再入力',   // Retype Password
    30 => '変更許可',           // Unfreeze
    31 => 'このフォルダーの未読チェックを停止',     // Stop tracking unread mail in this folder
    32 => 'このフォルダーの未読チェックを開始',     // Track unread mail in this folder
    33 => '既読',               // Read             // 2
    34 => '未読',               // Unread           // 3
    35 => '印オン',             // Flag             // 325
    36 => 'フォルダー表示',     // Show Folder List
    37 => 'MLに返信',           // Reply to list    //40
    38 => '表示対象',           // Show
    39 => '表示順',             // Sort             // 17
    40 => '表示ページ',         // Viewing Page
    41 => 'メール合計数',       // Total Messages
    42 => 'Type',
    43 => 'Filename',
    44 => '添付',               // Attachments  // 166
    45 => 'Skip Sent Folder',   // 298
    46 => '必須項目が空欄です',     // Required field cannot be blank
    47 => '必須項目が未指定です',   // Required field was missing
    48 => '入力値が正しくありません',   // Required field was unacceptable
    49 => 'ユーザー名またはパスワードが正しくありません',    // Incorrect Username or Password // 195
    50 => 'ログアウトしました', // Logout Successful
    51 => '重要度',             // Priority // 318
    52 => 'Request MDN',    // 319
    53 => 'Bcc',            // 88
    54 => 'Cc',             // 87
    55 => 'To',             // 25 
    56 => 'From',           // 22
    57 => '大きさ',             // Size     // 24
    58 => '日時',               // Date     // 23
    59 => '削除',               // Delete   // 4
    60 => '添付実行',           // Attach   // 165
    61 => '非表示',             // Hide     // 130
    62 => '取り消し',           // Cancel
    63 => '選択したメールを削除します。\nよろしいですか？',  // Are you sure you want to delete the selected message(s)?
    64 => 'このメールを削除します。\nよろしいですか？',  // Are you sure you want to delete this message?
    65 => '印オフ',             // Unflag   // 328
    66 => '移動',               // Move     // 0
    67 => '複写',               // Copy     // 1
    68 => '完全削除',           // Expunge  // 363
    69 => '主要ヘッダー表示',   // Small headers    // 30
    70 => '返信',               // Reply            // 35
    71 => '全員に返信',         // Reply to all     // 36
    72 => '転送',               // Forward          // 37
    73 => '新規として転送',     // Edit as new      // 313
    74 => '再編集',             // Resume draft     // 247
    75 => '全ヘッダー表示',     // Full headers     // 29
    76 => '原型表示',           // Raw view         // 31
    77 => '印刷プレビュー',     // Print view       // 34
    78 => 'スレッド表示',       // Thread view      // 33
    79 => '返答を調べる',       // Find Response    // 253
    80 => 'メッセージ構成',     // Message Parts    // 46
    81 => 'Mime-type',          // 44
    82 => 'Description',        // 45
    83 => 'Charset',
    84 => 'Encoding',
    85 => '表示',               // View // 39
    86 => 'ダウンロード',       // Download // 38
    87 => '通常表示',           // Normal view // 32
    88 => 'Pages',
    89 => '検索結果該当数',     // Total matches for current search
    90 => '表示するものがありません',   // No search results to display // 393
    91 => '検索結果破棄',               // Clear results
    92 => '検索対象フォルダー',         // Target Folders   // 58
    93 => '検索文字',                   // Search Terms
    94 => '詳細検索条件指定',           // Switch to advanced search
    95 => '簡易検索条件指定',           // Switch to simple search
    96 => '検索文字',                   // Search for
    97 => '検索条件初期化',             // Reset search     // 60
    98 => '条件追加',                   // Add search term
    99 => 'And',
    100 => 'Or',
    101 => '条件削除',                  // Remove last term
    102 => '検索部分',                  // On
    103 => '検索対象',                  // Within
    104 => 'メールの大きさ',            // With a size of
    105 => 'メールの日付',              // With a date range of
    106 => 'メール全体',                // Entire message
    107 => '発信人(From)',              // From field
    108 => '件名(Subject)',             // Subject field
    109 => '宛先(To)',                  // To field
    110 => '写し宛先(Cc)',              // Cc field
    111 => '本文',                      // Message body
    112 => 'Messages',   // 18
    113 => '全てのメール',      // All messages         // 52
    114 => '未読のメール',      // Unread messages
    115 => '既読のメール',      // Read messages
    116 => '印を付けたメール',  // Flagged messages
    117 => '印なしのメール',    // Unflagged messages
    118 => '返答したメール',    // Answered messages    // 67
    119 => '未返答のメール',    // Unanswered messages  // 68
    120 => '＜',                // Smaller than
    121 => '＞',                // Greater than
    122 => '全て',              // Any                  // 76
    123 => '≦',                // Before               // 77
    124 => '≧',                // Since                // 78
    125 => 'Bytes',      // 82
    126 => 'Kilobytes',     // 83
    127 => 'Megabytes',     // 84
    128 => '月',                // Month
    129 => '日',                // Day
    130 => '年',                // Year
    131 => '1月',               // January
    132 => '2月',               // February
    133 => '3月',               // March
    134 => '4月',               // April
    135 => '5月',               // May
    136 => '6月',               // June
    137 => '7月',               // July
    138 => '8月',               // August
    139 => '9月',               // September
    140 => '10月',              // October
    141 => '11月',              // November
    142 => '12月',              // December
    143 => '名前',              // Name         // 93
    144 => '電話',              // Phone
    145 => '所属',              // Organization
    146 => 'ファイル読込',      // Import
    147 => '追加',              // Add
    148 => '全件取り出し',      // Export all
    149 => '氏名',              // Full name
    150 => '姓',                // Family name
    151 => '名',                // Given name
    152 => '会社名',            // Organization name
    153 => '詳細',              // Details
    154 => '編集',              // Edit
    155 => 'ファイル出力',      // Export
    156 => '登録情報のファイル取り込み',    // Import a Contact
    157 => '登録情報一覧',      // Existing Contacts
    158 => '登録情報追加',      // Add a Contact
    159 => '登録情報編集',      // Edit Contact
    160 => 'VCF file to import',
    161 => 'Multiple vCards in one file',
    162 => 'メール・アドレス 1',        // Address 1
    163 => 'メール・アドレス 2',        // Address 2
    164 => 'メール・アドレス 3',        // Address 3
    165 => 'メール・アドレス 4',        // Address 4
    166 => '表示氏名',          // Display Name
    167 => 'ミドル名',          // Middle Name
    168 => '氏名接頭文字',      // Name Prefix
    169 => '氏名接尾文字',      // Name Suffix
    170 => '番地',              // Post Office Address
    171 => 'ビル名',            // Extended Address
    172 => '地区',              // Street Address
    173 => '市区町村',          // City
    174 => '都道府県',          // Region
    175 => '郵便番号',          // Postal Code
    176 => '国',                // Country
    177 => '住所の種類',        // Address Type
    178 => '電話番号',          // Telephone
    179 => '電話番号 1',        // Phone 1
    180 => '電話番号 2',        // Phone 2
    181 => '電話番号 3',        // Phone 3
    182 => '住所',              // Address
    183 => '会社名',            // Company Name
    184 => '部門',              // Company Unit
    185 => '役職',              // Title
    186 => 'Top',   // 324
    187 => '全般的な設定',              // General Options
    188 => 'フォルダーの設定',          // Folder Options
    189 => 'メッセージ表示の設定',      // Message view options
    190 => 'メール表示の設定',          // Mailbox view options
    191 => '新着メール確認の設定',      // New mail options
    192 => 'メール作成の設定',          // Compose page options
    193 => '更新',                      // Update       // 61
    194 => 'Javaスクリプトの有効化が必要です',  // Javascript support required
    195 => 'Javaスクリプトが使用されます',      // Javascript used if available
    196 => '背景色',                        // Theme // 105
    197 => '表示モード',                    // Display Mode
    198 => '標準時',                        // Timezone
    199 => '日付時刻表示形式',              // Clock date/time format
    200 => 'メールの日付時刻表示形式',      // Message date/time format
    201 => 'ログイン直後の表示ページ',      // First page after login
    202 => '文字の大きさ',                  // Font size    // 281
    203 => '言語',                          // Language     // 215
    204 => '削除前に確認する',              // Confirm before deleting
    205 => 'フォルダー・リストを表示する',  // Show folder list
    206 => 'PDA端末の時は簡易表示する',     // Auto switch to simple mode for PDAs
    207 => 'プロファイル設定画面に行く',    // Manage your profile
    208 => '削除フォルダー',                // Trash folder     // 116
    209 => '送信済みフォルダー',            // Sent folder      // 115
    210 => '原稿フォルダー',                // Draft folder     // 117
    211 => 'フォルダー表示形式',            // Folder style     // 271
    212 => 'フォルダー詳細表示',            // Folder detail    // 270
    213 => '自動更新間隔',                  // Automatic detail updates
    214 => 'ハイパーリンクのクリック有効化',    // Clickable links in text parts  // 237
    215 => 'メール・アドレスのクリック有効化',  // Clickable emails in text parts // 238
    216 => '返信テキストを高輝度表示',      // Highlight reply text
    217 => 'HTMLパート表示を初期選択',      // HTML parts by default    // 274
    218 => '文字フォント',                  // Font Family              // 107
    219 => '添付をサムネイル表示',          // Show image attachment thumbnails
    220 => '全ヘッダー表示を初期選択',      // Full headers by default
    221 => '通常表示するヘッダー',          // Visible small headers
    222 => '一覧の表示件数',                // Messages per page   // 109
    223 => 'メール操作ボタンを一覧の下にも表示する',    // Show message controls below list
    224 => 'メール・ボックスの変更可否ボタンを表示する', // Show mailbox freeze option
    225 => '新着メール確認間隔',            // Automatic refresh
    226 => '未読がないフォルダーを非表示',  // Hide folders with no unread mail
    227 => 'テキスト様式',                  // Text format
    228 => 'テキストのエンコード方式',      // Text encoding
    229 => 'エージェント情報を含めない',    // Hide user agent
    230 => '送信前に確認する',              // Confirm before sending
    231 => '件名が空白の場合に確認する',    // Confirm sending with a blank subject
    232 => '編集中の自動保存間隔',          // Autosave while composing
    233 => 'SMTP認証',              // SMTP authentication
    234 => '認証ユーザーID',        // Authentication username
    235 => '認証パスワード',        // Authentication password
    236 => 'プロファイル',          // Folders // 104
    237 => 'Reply-To',
    238 => 'vCard',
    239 => '署名欄',                // Signature // 102
    240 => '常に署名',              // Auto sign
    241 => 'Default',
    242 => 'None',   // 291
    243 => '追加',                  // Add new identity
    244 => 'オプション設定画面に行く',  // Back to options
    245 => 'Unread Messages',
    246 => 'Add Folder',
    247 => 'Remove Folder', 
    248 => 'Remove',
    249 => 'No unread messages in this folder',
    250 => 'フォルダーの作成',      // Create a folder
    251 => 'フォルダーの削除',      // Delete a folder
    252 => 'フォルダー名の変更',    // Rename a folder
    253 => '管理',                  // Manage
    254 => '作成',                  // Create
    255 => '変更',                  // Rename       //239
    256 => 'フォルダー',            // Folder
    257 => '非表示',                // Hidden
    258 => 'メール新着チェック',    // Check for new mail
    259 => '表示順',                // Sort order
    260 => 'In',
    261 => 'このフォルダーを削除します。\nこのフォルダーにある全てのメールも削除されます。\nよろしいですか？', // Are you sure you want to delete this folder? If you do ALL MAIL IN THIS FOLDER WILL BE DELETED
    262 => 'Version',               // Retain English for "About"
    263 => 'AJAX enabled',          // Retain English for "About"
    264 => 'Folder cache enabled',  // Retain English for "About"
    265 => 'UID cache enabled',     // Retain English for "About"
    266 => 'Header cache enabled',  // Retain English for "About"
    267 => 'Plugins',               // Retain English for "About"
    268 => 'Web Server',            // Retain English for "About"
    269 => 'Software',              // Retain English for "About"
    270 => 'Administrator',         // Retain English for "About"
    271 => 'Host',                  // Retain English for "About"
    272 => 'Time',                  // Retain English for "About"
    273 => 'IMAP Server',           // Retain English for "About" // 287
    274 => 'Banner',                // Retain English for "About" // 174
    275 => 'Capability',            // Retain English for "About" // 175
    276 => 'Browser',               // Retain English for "About"
    277 => 'User Agent',            // Retain English for "About"
    278 => 'IP Address',            // Retain English for "About"
    279 => '受信日時の新着順',              // Newest first (arrival date)
    280 => '受信日時の古着順',              // Oldest first (arrival date)
    281 => 'ヘッダー日時の新着順',          // Newest first (header date)
    282 => 'ヘッダー日時の古着順',          // Oldest first (header date)
    283 => 'FROMの昇順',                    // A-Z on the FROM field
    284 => 'FROMの降順',                    // Z-A on the FROM field
    285 => 'SUBJECTの昇順',                 // A-Z on the SUBJECT field
    286 => 'SUBJECTの降順',                 // Z-A on the SUBJECT field
    287 => 'CCの昇順',                      // A-Z on the CC field
    288 => 'CCの降順',                      // Z-A on the CC field
    289 => 'TOの昇順',                      // A-Z on the TO field
    290 => 'TOの降順',                      // Z-A on the TO field
    291 => '大きさの降順（大きい順）',      // Largest first by size
    292 => '大きさの昇順（小さい順）',      // Smallest first by size
    293 => 'スレッドの参照番号',            // Thread sort (reference)
    294 => 'スレッドのSUBJECT',             // Thread sort (ordered-subject)
    295 => '削除したメール',                // Deleted messsages
    296 => '未削除のメール',                // Undeleted messages
    297 => 'このページ',                    // On this page
    298 => 'このフォルダー',                // In this folder
    299 => '全てのフォルダー',              // In all folders
    300 => 'From now',
    301 => 'Nested',    // 266
    302 => 'Flat',      // 267
    303 => 'New only',  // 268
    304 => 'New and total',  // 269
    305 => 'Fixed',
    306 => 'Flowed',
    307 => 'Preformatted',
    308 => '8bit',
    309 => 'quoted-printable',
    310 => 'base64',
    311 => 'plain',
    312 => 'login',
    313 => 'cram-md5',
    314 => 'external',
    315 => '前のメール',        // Previous
    316 => 'メール一覧',        // Up to mailbox
    317 => '次のメール',        // Next
    318 => '前のメッセージ部分',    // Previous message part
    319 => '次のメッセージ部分',    // Next message part
    320 => 'Close',
    321 => 'Page', // 9
    322 => 'Viewing message',
    323 => '次頁',              // Next page
    324 => '前頁',              // Previous page
    325 => 'Work',
    326 => 'Home',
    327 => 'Cell',
    328 => 'Voice',
    329 => 'Fax',
    330 => 'Preferred',
    331 => 'Parcel',
    332 => 'Post',
    333 => '1分',               //  1 Minute
    334 => '2分',               //  2 Minutes
    335 => '5分',               //  5 Minutes
    336 => '10分',              // 10 Minutes
    337 => '20分',              // 20 Minutes
    338 => 'Contact source updated',
    339 => 'Contact page updated',
    340 => 'メール・ボックスを変更許可にしました',      // Mailbox state unfrozen
    341 => 'メール・ボックスを変更禁止にしました',      // Mailbox state frozen
    342 => '草稿フォルダーがないのでINBOXを使います',   // No Draft folder configured, using INBOX
    343 => '原稿を保存しました',            // Draft Saved // 211
    344 => 'Attached Contact',
    345 => 'No contact selected to attach',
    346 => '署名を追記しました',            // Message signed
    347 => '検索結果を破棄しました',        // Search results cleared
    348 => 'アドレスを追加しました',        // Added address
    349 => '添付ファイルを削除しました',    // Attachments deleted
    350 => 'ファイルを添付しました',        // File attached
    351 => '検索条件に該当がありました',    // Matching contacts found
    352 => '検索条件に該当がありません',    // No matching contacts found
    353 => 'Contacts closed',
    354 => 'Contacts opened',
    355 => 'メールを送信しました',          // Message sent // 184
    356 => '宛先が未入力です',              // No valid recipient addresses found
    357 => 'No valid from addresses found',
    358 => 'カードを取り込みました',                    // Cards imported
    359 => 'アップロードしたファイルに有効なカードがありません', // No valid cards found in uploaded file
    360 => 'カードが解析できません',                    // Could not parse card
    361 => 'カードがありません',                        // Card was empty
    362 => 'MIMEタイプが正しくありません',              // Incorrect MIME type
    363 => '読み込むファイルが見つかりません',          // No file found to upload
    364 => 'ファイルの読み込みでエラーが発生しました',  // An error occured uploading the file
    365 => '登録情報を削除しました',                    // Contact deleted      // 255
    366 => '登録情報を更新しました',                    // Contact updated      // 152
    367 => '登録情報を追加しました',                    // Contact added        // 154
    368 => '検索対象フォルダーが選択されていません',    // No target folder selected
    369 => 'ANDかORを指定して下さい',                   // Selecting AND or OR is required with multiple search terms
    370 => 'メールの大きさを指定して下さい',            // Searching by size requires a size value
    371 => 'メールの日付範囲を指定して下さい',          // Searching by date range requires a full date
    372 => '検索条件に該当するものが見つかりました',        // Matches found
    373 => '検索条件に該当するものが見つかりませんでした',  // No matches found
    374 => 'SMTP認証にユーザーIDとパスワードが必要です',    // SMTP authentication requires a username and password
    375 => '１ページあたり１００メールまでです',        // Messages per page cannot be more than 100
    376 => '選択したフォルダーが見つかりません',        // Selected foder could not be found
    377 => 'フォルダーを削除しました',                  // Folder deleted
    378 => 'フォルダー名が変更できませんでした',        // Unable to rename folder
    379 => 'フォルダー名を変更しました',                // Folder renamed           // 241
    380 => 'フォルダーを作成できませんでした',          // Could not create folder
    381 => 'フォルダーを作成しました',                  // Folder created           // 208
    382 => 'フォルダーを削除できませんでした',          // Could not delete folder
    383 => 'ようこそ',                                  // Welcome
    384 => 'プロファイルが見つかりません',              // No default profile found! Please add one at the Profile page
    385 => 'スレッド表示で500メール以降は割愛されました',     // Thread truncated at 500 messages
    386 => '検索文言が長すぎます',                      // Maximum number of search terms reached
    387 => 'メール・ボックスは選択できません',          // Unable to select that mailbox
    388 => 'Response found',
    389 => 'No response found',
    390 => 'Maximum read length exceeded, the message was truncated',
    391 => 'Outgoing mail is DISABLED until a profile is setup. You can add one at the Profile page',
    392 => 'Corrupt settings file detected',
    393 => 'No database connection found',
    394 => 'Corrupt settings in in database<br />Table row ID',
    395 => 'このフォルダーは、変更禁止です',            // This folder is currently frozen
    396 => '参照モードでは、その操作できません',        // Operation not permitted in read-only mode
    397 => 'メールを既読にしました',                    // Messages read
    398 => 'メールに印を付けました',                    // Messages flagged
    399 => 'メールの印を消しました',                    // Messages unflagged
    400 => 'メールを未読にしました',                    // Messages unread
    401 => 'メールを既読にしました',                    // Messages read
    402 => 'メールを削除しました',                      // Messages deleted
    403 => 'メールを復活しました',                      // Messages undeleted
    404 => 'メールの完全削除に失敗しました',            // Expunge failed
    405 => 'メールの削除に失敗しました',                // Delete message failed
    406 => 'メールを削除フォルダーに移動できませんでした',      // Could not move messages to the trash folder, delete aborted
    407 => 'メールを複写しました',                      // Messages copied
    408 => 'メールの複写に失敗しました',                // Copy message failed
    409 => 'メールを移動しました',                      // Messages moved
    410 => 'メールを完全削除しました',                  // Messages expunged
    411 => '設定を更新しました',                        // Settings updated         // 118
    412 => '設定が保存できませんでした',                // Could not save settings  // 273
    413 => '件名が未入力ですが、送信しますか？',        // Subject field is blank, continue sending message?
    414 => 'メールを送信します。\nよろしいですか？',    // Are you sure you want to send this message?
    415 => 'メール送信中...',                           // Sending message...
    416 => 'All sources',
    417 => '更新チェック中...',                         // Checking for updates...
    418 => 'メール・ボックスが更新されました',          // Mailbox change detected
    419 => 'Search results',
    420 => '全て削除',                                  // Empty Trash
    421 => '削除フォルダーのメールを削除します。\nよろしいですか？',  // Are you sure you want to empty the trash folder?
    422 => '選択されたメールを完全削除します。\nよろしいですか？',    // Are you sure you want to expunge the selected message(s)?
    423 => '常に完全削除ボタンを表示する',              // Always show expunge option
    424 => '選択メールだけを完全削除する',              // Only expunge selected messages
    425 => '未送信で画面から出る時に確認する',          // Confirm when exiting without sending
    426 => '連絡先を削除します。\nよろしいですか？',    // Are you sure you want to remove this contact?
    427 => 'ログアウト時にINBOXを空にする',             // Expunge INBOX on logout
    428 => 'No Action',
    429 => 'HTML中の外部リンク画像を表示する',          // Show external images in HTML by default
    430 => 'メールのデフォルト処理',                  // Default message action
    431 => '＝',                                        // On   // in the advanced search date range dialog
    432 => 'メールボックスは空です',                    // Mailbox is Empty
    433 => '復活',                                      // Undelete
    434 => '指定したフォルダーのみ表示する',            // Only display subscribed folders
    435 => '前頁次頁のリンクを一覧の上下に表示する',    // Show page links above and below message list
    436 => 'INBOX',
    
    437 => 'Let the browser wrap text messages',
    438 => '復活するメールを選択して下さい',            // Message to undelete
    439 => '削除するメールを選択して下さい',            // Message to delete
    440 => '完全削除するメールを選択して下さい',        // Message to expunge
    441 => '印をつけるメールを選択して下さい',          // Message to flag
    442 => '印を消すメールを選択して下さい',            // Message to unflag
    443 => '既読にするメールを選択して下さい',          // Message to mark as read
    444 => '未読にするメールを選択して下さい',          // Message to mark as unread
    445 => '複写するメールを選択して下さい',            // Message to copy
    446 => '移動するメールを選択して下さい',            // Message to move
    447 => '削除されたメールを非表示にする',            // Hide deleted messages
    448 => '送信後にドラフトを削除する',                // Delete resumed drafts after sending
    449 => 'Website',
    450 => '新しいウィンドウでメールを作成する',        // Compose messages in a new window
    451 => '新しいウィンドウでメールを読む',            // Read messages in a new window
    452 => 'Previous + Action',
    453 => 'Next + Action',
    454 => 'Up to Mailbox + Action',
    455 => 'Minimize message parts display',
    456 => 'Show All',
    457 => 'Show Minimal',
    458 => 'WARNING: The message controls will now operate on the ALL the messages in this mailbox',
    459 => 'Entire Mailbox',
    460 => 'Selected',
    461 => 'Show "Entire Mailbox" option in the message controls',
    462 => 'Operate on',
    463 => 'Sending Message...',
    464 => '%s minute ago',
    465 => '%s minutes ago',
    466 => '%s hour ago',
    467 => '%s hour, %s minute ago',
    468 => '%s hour, %s minutes ago',
    469 => '%s hours ago',
    470 => '%s hours, %s minute ago',
    471 => '%s hours, %s minutes ago',
    472 => '%s day ago',
    473 => '%s day, %s minute ago',
    474 => '%s day, %s minutes ago',
    475 => '%s day, %s hour ago',
    476 => '%s day, %s hours ago',
    477 => '%s days ago',
    478 => '%s days, %s minute ago',
    479 => '%s days, %s minutes ago',
    480 => '%s days, %s hour ago',
    481 => '%s days, %s hours ago',
    482 => '%s year ago',
    483 => '%s year, %s minute ago',
    484 => '%s year, %s minutes ago',
    485 => '%s year, %s hour ago',
    486 => '%s year, %s hours ago',
    487 => '%s year, %s day ago',
    488 => '%s year, %s days ago',
    489 => '%s years ago',
    490 => '%s years, %s minute ago',
    491 => '%s years, %s minutes ago',
    492 => '%s years, %s hour ago',
    493 => '%s years, %s hours ago',
    494 => '%s years, %s day ago',
    495 => '%s years, %s days ago',
    496 => 'Just now',
    497 => 'Refresh the list when the folders are updated',
    498 => 'Do not show the read/unread messsage list icons',
    499 => 'Do not show the folder list icons',
    500 => 'Unknown',
    501 => 'Show All',
    502 => 'Show Pages',
    503 => 'Opening mailbox',
    504 => 'Disable selected message highlighting',
    505 => 'Could not connect to the IMAP server',
    506 => 'Add Group',
    507 => 'Edit Group',
    508 => 'Members',
    509 => 'No groups found',
    510 => 'Group Name',
    511 => 'Existing Groups',
    512 => 'Groups',
    513 => 'Group Updated',
    514 => 'Added %s contacts to group',
    515 => 'Added %s contact to group',
    516 => 'Removed %s contacts from group',
    517 => 'Removed %s contact from group',
    518 => 'Maximum length of the From field (0 for unlimited)',
    519 => 'A group with that name already exists',
    520 => 'Close new window after sending',
    521 => 'Show',
    522 => 'Hide',
    523 => 'Maximum length of the Subject field (0 for unlimited)',
    524 => 'No Subject',
    525 => 'Are you sure you want to expunge this mailbox?',
    526 => 'Link',
    527 => 'Email',
    528 => 'Could not open the selected message part',
    529 => 'Could not find a viewable message part',
    530 => 'Open in a new window',
    531 => 'Show open in new window icons in message lists',
    532 => 'Hastymail2 has been updated to a new version: %s',
    533 => 'PHP5 utility module enabled',
    534 => 'Yes',
    535 => 'No',
    536 => '30 Seconds',
    537 => 'Unread: %s', /* unread page link on the main menu, the %s is the number of unread messages */
    538 => 'To', /* As in "into" */
    539 => 'Unable to save sent message',
    540 => 'Attach', /* As "forward as attachment" */
    541 => 'Found %s messages in %s folders',
    542 => 'Hide External Images',
    543 => 'Show External Images',
    544 => '%s external images replaced',

);
return $strings;
?>
