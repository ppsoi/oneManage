<?php

$exts['img'] = ['ico', 'bmp', 'gif', 'jpg', 'jpeg', 'jpe', 'jfif', 'tif', 'tiff', 'png', 'heic', 'webp'];
$exts['music'] = ['mp3', 'wma', 'flac', 'wav', 'ogg'];
$exts['office'] = ['doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx'];
$exts['txt'] = ['txt', 'bat', 'sh', 'php', 'asp', 'js', 'json', 'html', 'c', 'md'];
$exts['video'] = ['mp4', 'webm', 'mkv', 'mov', 'flv', 'blv', 'avi', 'wmv', 'm3u8'];
$exts['zip'] = ['zip', 'rar', '7z', 'gz', 'tar'];

$constStr = [
    'languages' => [
        'en-us' => 'English',
        'zh-cn' => '中文',
        'ja' => '日本語',
        'ko-kr' => '한국어',
    ],
    'Week' => [
        'en-us' => [
            0 => 'Sunday',
            1 => 'Monday',
            2 => 'Tuesday',
            3 => 'Wednesday',
            4 => 'Thursday',
            5 => 'Friday',
            6 => 'Saturday',
        ],
        'zh-cn' => [
            0 => '星期日',
            1 => '星期一',
            2 => '星期二',
            3 => '星期三',
            4 => '星期四',
            5 => '星期五',
            6 => '星期六',
        ],
        'ja' => [
            0 => '日曜日',
            1 => '月曜日',
            2 => '火曜日',
            3 => '水曜日',
            4 => '木曜日',
            5 => '金曜日',
            6 => '土曜日',
        ],
        'ko-kr' => [
            0 => '일요일',
            1 => '월요일',
            2 => '화요일',
            3 => '수요일',
            4 => '목요일',
            5 => '금요일',
            6 => '토요일',
        ],
    ],
    'EnvironmentsDescription' => [
        'en-us' => [
            'admin' => 'The admin password, Login button will not show when empty',
            'adminloginpage' => 'if set, the Login button will not display, and the login page no longer \'?admin\', it is \'?{this value}\'.',
            'domain_path' => 'more custom domain, format is a1.com:/dirto/path1|b2.com:/path2',
            'diskname' => 'The disk name you want show.',
            'disktag' => 'A tag used in store config and url.',
            'background' => 'Set an url as background photo, or put a \'background.jpg\' at showed path.',
            'guestup_path' => 'Set guest upload dir, before set this, the files in this dir will show as normal.',
            'passfile' => 'The password of dir will save in this file.',
            'public_path' => 'Show this Onedrive dir when through the long url of API Gateway; public show files less than private.',
            'sitename' => 'sitename',
            'Onedrive_ver' => 'Onedrive version',
        ],
        'zh-cn' => [
            'admin' => '管理密码，不添加时不显示登录页面且无法登录。',
            'adminloginpage' => '如果设置，登录按钮及页面隐藏。管理登录的页面不再是\'?admin\'，而是\'?此设置的值\'。',
            'domain_path' => '使用多个自定义域名时，指定每个域名看到的目录。格式为a1.com:/dirto/path1|b1.com:/path2，比private_path优先。',
            'diskname' => '这个盘你想显示什么名称。',
            'disktag' => '一个标签，用于保存配置，多盘时会显示在url中。',
            'background' => '设置一个url作为背景，或者在你显示的目录放一个background.jpg文件。',
            'guestup_path' => '设置游客上传路径（图床路径），不设置这个值时该目录内容会正常列文件出来，设置后只有上传界面，不显示其中文件（登录后显示）。',
            'passfile' => '自定义密码文件的名字，可以是\'pppppp\'，也可以是\'aaaa.txt\'等等；列目录时不会显示，只有知道密码才能查看或下载此文件。密码是这个文件的内容，可以空格、可以中文；',
            'public_path' => '使用API长链接访问时，显示网盘文件的路径，不设置时默认为根目录；不能是private_path的上级（public看到的不能比private多，要么看到的就不一样）。',
            'sitename' => '网站的名称',
            'Onedrive_ver' => 'Onedrive版本',
        ],
        'ja' => [
            'admin' => 'パスワードを管理する、追加しない場合、ログインページは表示されず、ログインできません。',
            'adminloginpage' => '設定すると、ログインボタンとページが非表示になります。ログインを管理するためのページは\'?admin \'ではなく、\'?この設定の値\'。',
            'domain_path' => '複数のカスタムドメイン名を使用する場合、各ドメイン名に表示されるディレクトリを指定します。形式はa1.com:/dirto/path1|b1.com:/path2で、private_pathよりも優先されます。',
            'diskname' => '',
            'disktag' => '',
            'background' => '',
            'guestup_path' => 'マップベッドのパスを設定します。この値が設定されていない場合、ディレクトリの内容は通常ファイルにリストされ、設定後はアップロードインターフェイスのみが表示されます。',
            'passfile' => 'カスタムパスワードファイルの名前は、\'pppppp \'、\'aaaa.txt \'などの場合があります。ディレクトリをリストするときには表示されません。パスワードを知っている場合にのみ、このファイルを表示またはダウンロードできます。 パスワードはこのファイルの内容であり、スペースまたは漢字を使用できます。',
            'public_path' => 'APIのロングリンクアクセスを使用する場合、ネットワークディスクファイルのパスが表示されますが、設定されていない場合はデフォルトでルートディレクトリになり、private_pathの上位にはなりません（publicはprivate以上のものを見ることができません。それ以外は異なります。）。',
            'sitename' => 'ウェブサイト名',
            'Onedrive_ver' => 'Onedriveバージョン',
        ],
        'ko-kr' => [
            'admin' => '비밀번호를 관리하고 로그인 페이지를 표시하지 않으며 추가하지 않으면 로그인 할 수 없습니다.',
            'adminloginpage' => '설정하면 로그인 버튼과 페이지가 숨겨집니다. 로그인 관리 페이지는 더 이상 \ ?Admin\'이 아니라 \ ?이 설정의 값 \'입니다.',
            'domain_path' => '여러 개의 사용자 정의 도메인 이름을 사용하는 경우 각 도메인 이름에 표시되는 디렉토리를 지정하십시오. 형식은 a1.com:/dirto/path1|b1.com:/path2이며 private_path보다 우선합니다.',
            'diskname' => '이 디스크에 어떤 이름을 표시 하시겠습니까?',
            'disktag' => '레이블은 구성을 저장하는 데 사용되며 디스크가 여러 개인 경우 URL에 표시됩니다.',
            'background' => 'URL을 배경으로 설정하거나 표시하는 디렉토리에 background.jpg 파일을 넣으십시오.',
            'guestup_path' => '방문자의 업로드 경로 (맵 베드 경로)를 설정합니다.이 값을 설정하지 않으면 디렉토리의 내용이 파일로 표시되고 설정 후에는 업로드 인터페이스 만 표시되고 파일은 표시되지 않습니다 (로그인 후 표시).',
            'passfile' => '사용자 정의 비밀번호 파일의 이름은 \'pppppp\' \'aaaa.txt \'등이 될 수 있으며 디렉토리가 나열되어 있으면 표시되지 않으며 비밀번호를 알고있는 경우에만이 파일을 보거나 다운로드 할 수 있습니다. 암호는이 파일의 내용이며 공백이거나 한국어 일 수 있습니다.',
            'public_path' => 'API 긴 링크 액세스를 사용하는 경우 네트워크 디스크 파일의 경로가 표시됩니다. 설정되지 않은 경우 기본적으로 루트 디렉토리로 설정됩니다.',
            'sitename' => '웹 사이트 이름',
            'Onedrive_ver' => 'Onedrive 버전',
        ],
    ],
    'SetSecretsFirst' => [
        'en-us' => 'Set API in Config first! or reinstall.',
        'zh-cn' => '先在环境变量设置API！或重装。',
        'ja' => '最初に環境変数にAPIを設定してください！',
        'ko-kr' => '먼저 환경 변수에서 API를 설정하십시오! 또는 다시 설치하십시오.',
    ],
    'RefleshtoLogin' => [
        'en-us' => '<font color="red">Reflesh</font> and login.',
        'zh-cn' => '请<font color="red">刷新</font>页面后重新登录',
        'ja' => 'ページを<font color = "red">更新</font>して、再度ログインしてください',
        'ko-kr' => '페이지를 <font color = "red"> 새로 고침 </ font> 하시고 다시 로그인하십시오',
    ],
    'AdminLogin' => [
        'en-us' => 'Admin Login',
        'zh-cn' => '管理登录',
        'ja' => 'ログインを管理する',
        'ko-kr' => '로그인 관리',
    ],
    'LoginSuccess' => [
        'en-us' => 'Login Success!',
        'zh-cn' => '登录成功，正在跳转',
        'ja' => 'ログイン成功、ジャンプ',
        'ko-kr' => '로그인 성공, 점프',
    ],
    'InputPassword' => [
        'en-us' => 'Input Password',
        'zh-cn' => '输入密码',
        'ja' => 'パスワードを入力してください',
        'ko-kr' => '비밀번호 입력',
    ],
    'Login' => [
        'en-us' => 'Login',
        'zh-cn' => '登录',
        'ja' => 'サインイン',
        'ko-kr' => '로그인',
    ],
    'encrypt' => [
        'en-us' => 'Encrypt',
        'zh-cn' => '加密',
        'ja' => '暗号化',
        'ko-kr' => '암호화',
    ],
    'SetpassfileBfEncrypt' => [
        'en-us' => 'Set \'passfile\' in Environments before encrypt',
        'zh-cn' => '先在环境变量设置passfile才能加密',
        'ja' => '最初に暗号化する環境変数にパスファイルを設定します',
        'ko-kr' => '암호화하기 전에 환경 변수에 패스 파일을 설정하십시오',
    ],
    'updateProgram' => [
        'en-us' => 'Update Program',
        'zh-cn' => '一键更新',
        'ja' => 'ワンクリック更新',
        'ko-kr' => '원 클릭 업데이트',
    ],
    'UpdateSuccess' => [
        'en-us' => 'Program update Success!',
        'zh-cn' => '程序升级成功！',
        'ja' => 'プログラムのアップグレードに成功しました！',
        'ko-kr' => '프로그램 업그레이드 성공!',
    ],
    'Setup' => [
        'en-us' => 'Setup',
        'zh-cn' => '设置',
        'ja' => '設定する',
        'ko-kr' => '설정',
    ],
    'Back' => [
        'en-us' => 'Back',
        'zh-cn' => '返回',
        'ja' => 'back',
        'ko-kr' => '돌아 가기',
    ],
    'NotNeedUpdate' => [
        'en-us' => 'Not Need Update',
        'zh-cn' => '不需要更新',
        'ja' => '更新不要',
        'ko-kr' => '업데이트가 필요하지 않습니다',
    ],
    'PlatformConfig' => [
        'en-us' => 'Platform Config',
        'zh-cn' => '平台变量',
        'ja' => 'プラットフォーム変数',
        'ko-kr' => '플랫폼 변수',
    ],
    'DelDisk' => [
        'en-us' => 'Del This Disk',
        'zh-cn' => '删除此盘',
        'ja' => 'このディスクを削除',
        'ko-kr' => '이 디스크를 삭제',
    ],
    'AddDisk' => [
        'en-us' => 'Add Onedrive Disk',
        'zh-cn' => '添加Onedrive盘',
        'ja' => 'Onedriveを追加',
        'ko-kr' => 'Onedrive 추가',
    ],
    'Home' => [
        'en-us' => 'Home',
        'zh-cn' => '首页',
        'ja' => 'ホーム',
        'ko-kr' => '홈',
    ],
    'NeedUpdate' => [
        'en-us' => 'Program can update<br>Click setup in Operate at top.',
        'zh-cn' => '可以升级程序<br>在上方管理菜单中<br>进入设置页面升级',
        'ja' => 'プログラムをアップグレードできます<br>上記の管理メニューで<br>アップグレードする設定ページに入ります',
        'ko-kr' => '프로그램을 업그레이드 할 수 있습니다. <br> 위의 관리 메뉴에서 <br> 업그레이드 할 설정 페이지를 입력하십시오.',
    ],
    'Operate' => [
        'en-us' => 'Operate',
        'zh-cn' => '管理',
        'ja' => '管理',
        'ko-kr' => '관리',
    ],
    'Logout' => [
        'en-us' => 'Logout',
        'zh-cn' => '登出',
        'ja' => 'ログアウトする',
        'ko-kr' => '로그 아웃',
    ],
    'Create' => [
        'en-us' => 'Create',
        'zh-cn' => '新建',
        'ja' => '新しい',
        'ko-kr' => '새로운',
    ],
    'Download' => [
        'en-us' => 'download',
        'zh-cn' => '下载',
        'ja' => 'ダウンロードする',
        'ko-kr' => '다운로드',
    ],
    'ClicktoEdit' => [
        'en-us' => 'Click to edit',
        'zh-cn' => '点击后编辑',
        'ja' => 'クリック後に編集',
        'ko-kr' => '클릭 후 편집',
    ],
    'Save' => [
        'en-us' => 'Save',
        'zh-cn' => '保存',
        'ja' => '保存する',
        'ko-kr' => '저장',
    ],
    'FileNotSupport' => [
        'en-us' => 'File not support preview.',
        'zh-cn' => '文件格式不支持预览',
        'ja' => 'ファイル形式はプレビューをサポートしていません',
        'ko-kr' => '파일 형식은 미리보기를 지원하지 않습니다',
    ],
    'File' => [
        'en-us' => 'File',
        'zh-cn' => '文件',
        'ja' => 'ファイル',
        'ko-kr' => '파일',
    ],
    'ShowThumbnails' => [
        'en-us' => 'Thumbnails',
        'zh-cn' => '图片缩略',
        'ja' => '画像のサムネイル',
        'ko-kr' => '사진 섬네일',
    ],
    'EditTime' => [
        'en-us' => 'EditTime',
        'zh-cn' => '修改时间',
        'ja' => '変更時間',
        'ko-kr' => '수정 시간',
    ],
    'Size' => [
        'en-us' => 'Size',
        'zh-cn' => '大小',
        'ja' => 'サイズ ',
        'ko-kr' => '사이즈',
    ],
    'Rename' => [
        'en-us' => 'Rename',
        'zh-cn' => '重命名',
        'ja' => '名前を変更',
        'ko-kr' => '이름 바꾸기',
    ],
    'Move' => [
        'en-us' => 'Move',
        'zh-cn' => '移动',
        'ja' => '移動する',
        'ko-kr' => '이동',
    ],
    'Copy' => [
        'en-us' => 'Copy',
        'zh-cn' => '复制',
        'ja' => 'コピー',
        'ko-kr' => '복사',
    ],
    'CannotMove' => [
        'en-us' => 'Can not Move!',
        'zh-cn' => '不能移动！',
        'ja' => '動かない！',
        'ko-kr' => '움직일 수 없어!',
    ],
    'Delete' => [
        'en-us' => 'Delete',
        'zh-cn' => '删除',
        'ja' => '削除する',
        'ko-kr' => '삭제',
    ],
    'PrePage' => [
        'en-us' => 'PrePage',
        'zh-cn' => '上一页',
        'ja' => '前へ',
        'ko-kr' => '이전',
    ],
    'NextPage' => [
        'en-us' => 'NextPage',
        'zh-cn' => '下一页',
        'ja' => '次のページ',
        'ko-kr' => '다음 페이지',
    ],
    'Upload' => [
        'en-us' => 'Upload',
        'zh-cn' => '上传',
        'ja' => 'アップロードする',
        'ko-kr' => '업로드',
    ],
    'FileSelected' => [
        'en-us' => 'Select File',
        'zh-cn' => '选择文件',
        'ja' => 'ファイルを選択',
        'ko-kr' => '파일 선택',
    ],
    'NoFileSelected' => [
        'en-us' => 'Not Select File',
        'zh-cn' => '没有选择文件',
        'ja' => 'ファイルが選択されていません',
        'ko-kr' => '선택된 파일이 없습니다',
    ],
    'Submit' => [
        'en-us' => 'Submit',
        'zh-cn' => '确认',
        'ja' => '確認する',
        'ko-kr' => '확인',
    ],
    'Close' => [
        'en-us' => 'Close',
        'zh-cn' => '关闭',
        'ja' => '閉じる',
        'ko-kr' => '닫기',
    ],
    'InputPasswordUWant' => [
        'en-us' => 'Input Password you Want',
        'zh-cn' => '输入想要设置的密码',
        'ja' => '設定するパスワードを入力してください',
        'ko-kr' => '설정하려는 비밀번호를 입력하십시오',
    ],
    'ParentDir' => [
        'en-us' => 'Parent Dir',
        'zh-cn' => '上一级目录',
        'ja' => '親ディレクトリ',
        'ko-kr' => '부모 디렉토리',
    ],
    'Folder' => [
        'en-us' => 'Folder',
        'zh-cn' => '文件夹',
        'ja' => 'フォルダー',
        'ko-kr' => '폴더',
    ],
    'Name' => [
        'en-us' => 'Name',
        'zh-cn' => '名称',
        'ja' => '名前',
        'ko-kr' => '이름',
    ],
    'Content' => [
        'en-us' => 'Content',
        'zh-cn' => '内容',
        'ja' => '内容',
        'ko-kr' => '내용',
    ],
    'CancelEdit' => [
        'en-us' => 'Cancel Edit',
        'zh-cn' => '取消编辑',
        'ja' => '編集をキャンセル',
        'ko-kr' => '편집 취소',
    ],
    'GetFileNameFail' => [
        'en-us' => 'Fail to Get File Name!',
        'zh-cn' => '获取文件名失败！',
        'ja' => 'ファイル名を取得できませんでした！',
        'ko-kr' => '파일 이름을 가져 오지 못했습니다!',
    ],
    'GetUploadLink' => [
        'en-us' => 'Get Upload Link',
        'zh-cn' => '获取上传链接',
        'ja' => 'アップロードリンクを取得',
        'ko-kr' => '업로드 링크 받기',
    ],
    'UpFileTooLarge' => [
        'en-us' => 'The File is too Large!',
        'zh-cn' => '文件过大，终止上传。',
        'ja' => '超えると、アップロードは終了します。',
        'ko-kr' => '파일이 너무 커서 업로드가 종료되었습니다.',
    ],
    'UploadStart' => [
        'en-us' => 'Upload Start',
        'zh-cn' => '开始上传',
        'ja' => 'アップロードを開始',
        'ko-kr' => '업로드 시작',
    ],
    'UploadStartAt' => [
        'en-us' => 'Start At',
        'zh-cn' => '开始于',
        'ja' => 'で開始',
        'ko-kr' => '에서 시작',
    ],
    'ThisTime' => [
        'en-us' => 'This Time',
        'zh-cn' => '本次',
        'ja' => '今回は',
        'ko-kr' => '이번에는',
    ],
    'LastUpload' => [
        'en-us' => 'Last time Upload',
        'zh-cn' => '上次上传',
        'ja' => '上回は',
        'ko-kr' => '마지막 업로드',
    ],
    'AverageSpeed' => [
        'en-us' => 'AverageSpeed',
        'zh-cn' => '平均速度',
        'ja' => '平均速度',
        'ko-kr' => '평균 속도',
    ],
    'CurrentSpeed' => [
        'en-us' => 'CurrentSpeed',
        'zh-cn' => '即时速度',
        'ja' => 'インスタントスピード',
        'ko-kr' => '즉각적인 속도',
    ],
    'Expect' => [
        'en-us' => 'Expect',
        'zh-cn' => '预计还要',
        'ja' => '期待される',
        'ko-kr' => '예상',
    ],
    'EndAt' => [
        'en-us' => 'End At',
        'zh-cn' => '结束于',
        'ja' => 'で終了',
        'ko-kr' => '에 끝남',
    ],
    'UploadErrorUpAgain' => [
        'en-us' => 'Maybe error, do upload again.',
        'zh-cn' => '可能出错，重新上传。',
        'ja' => '間違っている可能性があります。もう一度アップロードしてください。',
        'ko-kr' => '잘못되었을 수 있습니다. 다시 업로드하십시오.',
    ],
    'UploadComplete' => [
        'en-us' => 'Upload Complete',
        'zh-cn' => '上传完成',
        'ja' => 'アップロード完了',
        'ko-kr' => '업로드 완료',
    ],
    'UploadFail23' => [
        'en-us' => 'Upload Fail, contain #.',
        'zh-cn' => '目录或文件名含有#，上传失败。',
        'ja' => 'ディレクトリまたはファイル名に＃が含まれています。アップロードに失敗しました。',
        'ko-kr' => '디렉토리 또는 파일 이름에 #이 포함되어 있습니다. 업로드하지 못했습니다.',
    ],
    'defaultSitename' => [
        'en-us' => 'OneManager',
        'zh-cn' => 'OneManager',
        'ja' => 'OneManager',
        'ko-kr' => 'OneManager',
    ],
    'SavingToken' => [
        'en-us' => 'Saving refresh_token!',
        'zh-cn' => '正在保存 refresh_token！',
        'ja' => 'refresh_tokenを保存しています！',
        'ko-kr' => 'refresh_token 저장 중!',
    ],
    'MayinEnv' => [
        'en-us' => 'The \'Onedrive_ver\' may in Config',
        'zh-cn' => 'Onedrive_ver应该已经写入',
        'ja' => 'Onedrive_verは環境変数に書き込まれている必要があります',
        'ko-kr' => 'Onedrive_verが書き込まれている必要があります',
    ],
    'Wait' => [
        'en-us' => 'Wait',
        'zh-cn' => '稍等',
        'ja' => 'ちょっと待って',
        'ko-kr' => '잠깐만',
    ],
    'WaitJumpIndex' => [
        'en-us' => 'Wait 5s jump to Home page',
        'zh-cn' => '等5s跳到首页',
        'ja' => '5秒待ってホームページにジャンプします',
        'ko-kr' => '5 초 동안 홈페이지로 이동',
    ],
    'JumptoOffice' => [
        'en-us' => 'Login Office and Get a refresh_token',
        'zh-cn' => '跳转到Office，登录获取refresh_token',
        'ja' => 'Officeにジャンプしてログインし、refresh_tokenを取得します',
        'ko-kr' => '사무실로 이동하여 로그인하여 refresh_token을 받으십시오.',
    ],
    'OnedriveDiskTag' => [
        'en-us' => 'Onedrive Disk Tag',
        'zh-cn' => 'Onedrive 标签',
        'ja' => 'Onedriveタグ',
        'ko-kr' => 'Onedrive 태그',
    ],
    'OnedriveDiskName' => [
        'en-us' => 'Onedrive Showed Name',
        'zh-cn' => 'Onedrive 显示名称',
        'ja' => 'Onedrive表示名',
        'ko-kr' => 'Onedrive 표시 이름',
    ],
    'OndriveVerMS' => [
        'en-us' => 'default(Onedrive, Onedrive for business)',
        'zh-cn' => '默认（支持商业版与个人版）',
        'ja' => 'デフォルト（商用版および個人版をサポート）',
        'ko-kr' => '기본 (상업용 및 개인용 버전 지원)',
    ],
    'OndriveVerCN' => [
        'en-us' => 'Onedrive in China',
        'zh-cn' => '世纪互联版',
        'ja' => '中国のOnedrive',
        'ko-kr' => '중국 Onedrive',
    ],
    'OndriveVerMSC' =>[
        'en-us' => 'default but use customer app id & secret',
        'zh-cn' => '国际版，自己申请应用ID与机密',
        'ja' => '国際版、アプリケーションIDとシークレットを自分で申請する',
        'ko-kr' => '국제 버전, 응용 프로그램 ID 및 비밀 신청',
    ],
    'GetSecretIDandKEY' =>[
        'en-us' => 'Get customer app id & secret',
        'zh-cn' => '申请应用ID与机密',
        'ja' => 'アプリケーションIDとシークレット',
    ],
    'TagFormatAlert' =>[
        'en-us' => 'Tag must start with a letter, end with a letter or digit and can only contain lowercase letters, digits, and dashes， at least 2 letters!',
        'zh-cn' => '标签只能以字母开头，以字母或数字结尾，至少2位',
        'ja' => 'タグは、文字で始まり、文字または数字で終わる必要があります。少なくとも2つ',
        'ko-kr' => '태그는 문자로 시작하고 문자 또는 숫자로 끝나야합니다 (2 이상).',
    ],
    'ClickInstall' =>[
        'en-us' => 'Click to install the project',
        'zh-cn' => '点击开始安装程序',
        'ja' => 'クリックしてインストールプロセスを開始します',
        'ko-kr' => '설치 과정을 시작하려면 클릭',
    ],
    'LogintoBind' =>[
        'en-us' => 'then login and bind your onedrive in setup',
        'zh-cn' => '然后登录后在设置中绑定你的onedrive。',
        'ja' => '次に、ログインして、設定でonedriveをバインドします。',
        'ko-kr' => '그런 다음 로그인하여 onedrive를 설정에 바인딩하십시오.',
    ],
    'MakesuerWriteable' =>[
        'en-us' => 'Plase make sure the config.php is writeable. run writeable.sh.',
        'zh-cn' => '确认config.php可写。',
        'ja' => 'config.phpが書き込み可能であることを確認してください。',
        'ko-kr' => 'config.php가 쓰기 가능한지 확인하십시오.',
    ],
    'MakesuerRewriteOn' =>[
        'en-us' => 'Plase make sure the RewriteEngine is On.',
        'zh-cn' => '确认重写（伪静态）功能启用。',
        'ja' => '書き換え（擬似静的）機能が有効になっていることを確認します。',
        'ko-kr' => '다시 쓰기 (의사 정적) 기능이 활성화되어 있는지 확인하십시오.',
    ],
    
    'Reflesh' => [
        'en-us' => 'Reflesh',
        'zh-cn' => '刷新',
        'ja' => 'リフレッシュ',
        'ko-kr' => '새로 고침',
    ],
    'SelectLanguage' => [
        'en-us' => 'Select Language',
        'zh-cn' => '选择语言',
        'ja' => '言語を選択してください',
        'ko-kr' => '언어를 선택하십시오',
    ],
    'RefreshCache' => [
        'en-us' => 'RefreshCache',
        'zh-cn' => '刷新缓存',
        'ja' => 'キャッシュを再構築',
        'ko-kr' => '캐시 플러시',
    ],
];
