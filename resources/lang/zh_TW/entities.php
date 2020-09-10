<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => '最近建立',
    'recently_created_pages' => '最近建立的頁面',
    'recently_updated_pages' => '最新頁面',
    'recently_created_chapters' => '最近建立的章節',
    'recently_created_books' => '最近建立的書本',
    'recently_created_shelves' => '最近建立的章節',
    'recently_update' => '最近更新',
    'recently_viewed' => '最近看過',
    'recent_activity' => '近期活動',
    'create_now' => '立即建立',
    'revisions' => '修訂歷史',
    'meta_revision' => '版本號 #:revisionCount',
    'meta_created' => '建立於 :timeLength',
    'meta_created_name' => '由 :user 建立於 :timeLength',
    'meta_updated' => '更新於 :timeLength',
    'meta_updated_name' => '由 :user 更新於 :timeLength',
    'entity_select' => '選擇項目',
    'images' => '圖片',
    'my_recent_drafts' => '我最近的草稿',
    'my_recently_viewed' => '我最近看過',
    'no_pages_viewed' => '您還沒有看過任何頁面',
    'no_pages_recently_created' => '最近沒有頁面被建立',
    'no_pages_recently_updated' => '最近沒有頁面被更新',
    'export' => '匯出',
    'export_html' => '網頁檔案',
    'export_pdf' => 'PDF檔案',
    'export_text' => '純文字檔案',

    // Permissions and restrictions
    'permissions' => '權限',
    'permissions_intro' => '本設定優先權高於每個使用者角色本身所具有的權限。',
    'permissions_enable' => '啟用自訂權限',
    'permissions_save' => '儲存權限',

    // Search
    'search_results' => '搜尋結果',
    'search_total_results_found' => '共找到了:count個結果',
    'search_clear' => '清除搜尋',
    'search_no_pages' => '沒有找到符合的頁面',
    'search_for_term' => '“:term”的搜尋結果',
    'search_more' => '更多結果',
    'search_filters' => '過濾搜尋結果',
    'search_content_type' => '種類',
    'search_exact_matches' => '精確符合',
    'search_tags' => '標籤搜尋',
    'search_options' => '選項',
    'search_viewed_by_me' => '我看過的',
    'search_not_viewed_by_me' => '我沒看過的',
    'search_permissions_set' => '權限設定',
    'search_created_by_me' => '我建立的',
    'search_updated_by_me' => '我更新的',
    'search_date_options' => '日期選項',
    'search_updated_before' => '在此之前更新',
    'search_updated_after' => '在此之後更新',
    'search_created_before' => '在此之前建立',
    'search_created_after' => '在此之後建立',
    'search_set_date' => '設定日期',
    'search_update' => '更新搜尋結果',

    // Shelves
    'shelf' => '書架',
    'shelves' => '書架',
    'x_shelves' => ':架|:章節',
    'shelves_long' => '書架',
    'shelves_empty' => '不存在已建立的書架',
    'shelves_create' => '建立書架',
    'shelves_popular' => '熱門書架',
    'shelves_new' => '新書架',
    'shelves_new_action' => '建立新的書架',
    'shelves_popular_empty' => '最受歡迎的書架將出現在這裡。',
    'shelves_new_empty' => '最近建立的書架將出現在這裡。',
    'shelves_save' => '儲存書架',
    'shelves_books' => '此書架上的書本',
    'shelves_add_books' => '將書本添加到此書架中',
    'shelves_drag_books' => '拖動書本到此處來將它添加至此書架中',
    'shelves_empty_contents' => '此書架沒有分配任何書本',
    'shelves_edit_and_assign' => '編輯書架以分配書本',
    'shelves_edit_named' => '編輯書架「:name」',
    'shelves_edit' => '編輯書架',
    'shelves_delete' => '刪除書架',
    'shelves_delete_named' => '刪除書架「:name」',
    'shelves_delete_explain' => "這將刪除名為「:name」的書架。包含在其中的書本不會被刪除。",
    'shelves_delete_confirmation' => '您確定要刪除此書架嗎？',
    'shelves_permissions' => '書架權限',
    'shelves_permissions_updated' => '書架權限已更新',
    'shelves_permissions_active' => '已啟用此書架的自訂權限',
    'shelves_copy_permissions_to_books' => '將權限複製到書本',
    'shelves_copy_permissions' => '複製權限',
    'shelves_copy_permissions_explain' => '這會將此書架目前的權限設定套用到所有包含的書本上。在生效之前，請確認您已儲存任何對此書架權限的變更。',
    'shelves_copy_permission_success' => '已將書架的權限複製到:count本書上',

    // Books
    'book' => '書本',
    'books' => '書本',
    'x_books' => ':count本書',
    'books_empty' => '不存在已建立的書',
    'books_popular' => '熱門書本',
    'books_recent' => '最近的書',
    'books_new' => '新書',
    'books_new_action' => '新增一本書',
    'books_popular_empty' => '最受歡迎的書本將出現在這裡。',
    'books_new_empty' => '最近建立的書本將出現在這裡。',
    'books_create' => '建立書本',
    'books_delete' => '刪除書本',
    'books_delete_named' => '刪除書本「:bookName」',
    'books_delete_explain' => '這將刪除書本「:bookName」。所有的章節和頁面都會被刪除。',
    'books_delete_confirmation' => '您確定要刪除此書本嗎？',
    'books_edit' => '編輯書本',
    'books_edit_named' => '編輯書本「:bookName」',
    'books_form_book_name' => '書名',
    'books_save' => '儲存書本',
    'books_permissions' => '書本權限',
    'books_permissions_updated' => '書本權限已更新',
    'books_empty_contents' => '本書目前沒有頁面或章節。',
    'books_empty_create_page' => '建立頁面',
    'books_empty_sort_current_book' => '排序目前書本',
    'books_empty_add_chapter' => '加入章節',
    'books_permissions_active' => '已啟用此書本的自訂權限',
    'books_search_this' => '搜尋這本書',
    'books_navigation' => '書本導覽',
    'books_sort' => '排序書本內容',
    'books_sort_named' => '排序書本「:bookName」',
    'books_sort_name' => '按名稱排序',
    'books_sort_created' => '按創建時間排序',
    'books_sort_updated' => '按更新時間排序',
    'books_sort_chapters_first' => '第一章',
    'books_sort_chapters_last' => '最後一章',
    'books_sort_show_other' => '顯示其他書本',
    'books_sort_save' => '儲存新順序',

    // Chapters
    'chapter' => '章節',
    'chapters' => '章節',
    'x_chapters' => ':count個章節',
    'chapters_popular' => '熱門章節',
    'chapters_new' => '新章節',
    'chapters_create' => '建立章節',
    'chapters_delete' => '刪除章節',
    'chapters_delete_named' => '刪除章節「:chapterName」',
    'chapters_delete_explain' => '這將刪除章節「:chapterName」。所有的頁面將被刪除並加入到其所在的書籍。',
    'chapters_delete_confirm' => '您確定要刪除此章節嗎？',
    'chapters_edit' => '編輯章節',
    'chapters_edit_named' => '編輯章節「:chapterName」',
    'chapters_save' => '儲存章節',
    'chapters_move' => '移動章節',
    'chapters_move_named' => '移動章節「:chapterName」',
    'chapter_move_success' => '章節移動到「:bookName」',
    'chapters_permissions' => '章節權限',
    'chapters_empty' => '本章目前沒有頁面。',
    'chapters_permissions_active' => '已啟用此章節的自訂權限',
    'chapters_permissions_success' => '章節權限已更新',
    'chapters_search_this' => '從本章節搜尋',

    // Pages
    'page' => '頁面',
    'pages' => '頁面',
    'x_pages' => ':count個頁面',
    'pages_popular' => '熱門頁面',
    'pages_new' => '新頁面',
    'pages_attachments' => '附件',
    'pages_navigation' => '頁面導覽',
    'pages_delete' => '刪除頁面',
    'pages_delete_named' => '刪除頁面“:pageName”',
    'pages_delete_draft_named' => '刪除草稿頁面“:pageName”',
    'pages_delete_draft' => '刪除草稿頁面',
    'pages_delete_success' => '頁面已刪除',
    'pages_delete_draft_success' => '草稿頁面已刪除',
    'pages_delete_confirm' => '您確定要刪除此頁面嗎？',
    'pages_delete_draft_confirm' => '您確定要刪除此草稿頁面嗎？',
    'pages_editing_named' => '正在編輯頁面“:pageName”',
    'pages_edit_draft_options' => '草稿選項',
    'pages_edit_save_draft' => '儲存草稿',
    'pages_edit_draft' => '編輯頁面草稿',
    'pages_editing_draft' => '正在編輯草稿',
    'pages_editing_page' => '正在編輯頁面',
    'pages_edit_draft_save_at' => '草稿儲存於 ',
    'pages_edit_delete_draft' => '刪除草稿',
    'pages_edit_discard_draft' => '放棄草稿',
    'pages_edit_set_changelog' => '更新說明',
    'pages_edit_enter_changelog_desc' => '輸入對您所做更改的簡易說明',
    'pages_edit_enter_changelog' => '輸入更新說明',
    'pages_save' => '儲存頁面',
    'pages_title' => '頁面標題',
    'pages_name' => '頁面名稱',
    'pages_md_editor' => '編輯者',
    'pages_md_preview' => '預覽',
    'pages_md_insert_image' => '插入圖片',
    'pages_md_insert_link' => '插入連結',
    'pages_md_insert_drawing' => '插入繪圖',
    'pages_not_in_chapter' => '本頁面不在某章節中',
    'pages_move' => '移動頁面',
    'pages_move_success' => '頁面已移動到「:parentName」',
    'pages_copy' => '複製頁面',
    'pages_copy_desination' => '複製的目的地',
    'pages_copy_success' => '頁面已成功複製',
    'pages_permissions' => '頁面權限',
    'pages_permissions_success' => '頁面權限已更新',
    'pages_revision' => '修訂',
    'pages_revisions' => '頁面修訂',
    'pages_revisions_named' => '“:pageName”頁面修訂',
    'pages_revision_named' => '“:pageName”頁面修訂',
    'pages_revisions_created_by' => '建立者',
    'pages_revisions_date' => '修訂日期',
    'pages_revisions_number' => '#',
    'pages_revisions_numbered' => '修訂編號:id',
    'pages_revisions_numbered_changes' => '修訂編號:id 更改',
    'pages_revisions_changelog' => '更新說明',
    'pages_revisions_changes' => '說明',
    'pages_revisions_current' => '目前版本',
    'pages_revisions_preview' => '預覽',
    'pages_revisions_restore' => '恢複',
    'pages_revisions_none' => '此頁面沒有修訂',
    'pages_copy_link' => '複製連結',
    'pages_edit_content_link' => '编辑内容',
    'pages_permissions_active' => '已啟用此頁面的自訂權限',
    'pages_initial_revision' => '初次發布',
    'pages_initial_name' => '新頁面',
    'pages_editing_draft_notification' => '您正在編輯在 :timeDiff 內儲存的草稿.',
    'pages_draft_edited_notification' => '此頁面已經被更新過，建議您放棄此草稿。',
    'pages_draft_edit_active' => [
        'start_a' => ':count位使用者正在編輯此頁面',
        'start_b' => '使用者“:userName”已經開始編輯此頁面',
        'time_a' => '自頁面上次更新以來',
        'time_b' => '在最近:minCount分鐘',
        'message' => ':time，:start。注意不要覆蓋到對方的更新。',
    ],
    'pages_draft_discarded' => '草稿已丟棄，編輯器已更新到目前頁面內容。',
    'pages_specific' => '指定頁面',
    'pages_is_template' => '頁面模板',

    // Editor Sidebar
    'page_tags' => '頁面標籤',
    'chapter_tags' => '章節標籤',
    'book_tags' => '書本標籤',
    'shelf_tags' => '書架標籤',
    'tag' => '標籤',
    'tags' =>  '標籤',
    'tag_name' =>  '標籤名稱',
    'tag_value' => '標籤值 (非必要)',
    'tags_explain' => "加入一些標籤以更好地對您的內容進行分類。\n您可以為標籤分配一個值，以進行更深入的組織。",
    'tags_add' => '加入另一個標籤',
    'tags_remove' => '移除此標籤',
    'attachments' => '附件',
    'attachments_explain' => '上傳一些檔案或附加連結顯示在您的網頁上。將顯示在在頁面的側邊欄。',
    'attachments_explain_instant_save' => '這裡的更改將立即儲存。Changes here are saved instantly.',
    'attachments_items' => '附加項目',
    'attachments_upload' => '上傳檔案',
    'attachments_link' => '附加連結',
    'attachments_set_link' => '設定連結',
    'attachments_delete_confirm' => '確認您想要刪除此附件後，請點選刪除。',
    'attachments_dropzone' => '刪除檔案或點選此處加入檔案',
    'attachments_no_files' => '尚未上傳檔案',
    'attachments_explain_link' => '如果您不想上傳檔案，則可以附加連結，這可以是指向其他頁面的連結，也可以是指向雲端檔案的連結。',
    'attachments_link_name' => '連結名稱',
    'attachment_link' => '附件連結',
    'attachments_link_url' => '連結到檔案',
    'attachments_link_url_hint' => '網站或檔案的網址',
    'attach' => '附加',
    'attachments_edit_file' => '編輯檔案',
    'attachments_edit_file_name' => '檔案名稱',
    'attachments_edit_drop_upload' => '刪除檔案或點選這裡上傳並覆蓋',
    'attachments_order_updated' => '附件順序已更新',
    'attachments_updated_success' => '附件資訊已更新',
    'attachments_deleted' => '附件已刪除',
    'attachments_file_uploaded' => '附件上傳成功',
    'attachments_file_updated' => '附件更新成功',
    'attachments_link_attached' => '連結成功附加到頁面',
    'templates' => '樣本',
    'templates_set_as_template' => '頁面是模板',
    'templates_explain_set_as_template' => '您可以將此頁面設置為模板，以便在創建其他頁面時利用其內容。 如果其他用戶對此頁面擁有查看權限，則將可以使用此模板。',
    'templates_replace_content' => '替換頁面內容',
    'templates_append_content' => '附加到頁面內容',
    'templates_prepend_content' => '前置頁面內容',

    // Profile View
    'profile_user_for_x' => '來這裡:time了',
    'profile_created_content' => '已建立內容',
    'profile_not_created_pages' => ':userName尚未建立任何頁面',
    'profile_not_created_chapters' => ':userName尚未建立任何章節',
    'profile_not_created_books' => ':userName尚未建立任何書本',
    'profile_not_created_shelves' => ':用戶名 沒有創建任何書架',

    // Comments
    'comment' => '評論',
    'comments' => '評論',
    'comment_add' => '新增評論',
    'comment_placeholder' => '在這裡評論',
    'comment_count' => '{0} 無評論|[1,*] :count條評論',
    'comment_save' => '儲存評論',
    'comment_saving' => '正在儲存評論...',
    'comment_deleting' => '正在刪除評論...',
    'comment_new' => '新評論',
    'comment_created' => '評論於 :createDiff',
    'comment_updated' => '更新於 :updateDiff (:username)',
    'comment_deleted_success' => '評論已刪除',
    'comment_created_success' => '評論已加入',
    'comment_updated_success' => '評論已更新',
    'comment_delete_confirm' => '你確定要刪除這條評論？',
    'comment_in_reply_to' => '回覆 :commentId',

    // Revision
    'revision_delete_confirm' => '您確定要刪除此修訂版嗎？',
    'revision_restore_confirm' => '您確定要還原此修訂版嗎？ 當前頁面內容將被替換。',
    'revision_delete_success' => '修訂刪除',
    'revision_cannot_delete_latest' => '無法刪除最新版本。'
];