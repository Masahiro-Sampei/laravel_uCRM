<?php

return [

    /*
    |----------------------------------------------------------------------
    | バリデーション用言語ライン
    |----------------------------------------------------------------------
    |
    | 以下の言語ラインは、バリデーションクラスで使用されるデフォルトのエラーメッセージです。
    | これらのルールには、サイズルールなど、複数のバージョンがある場合もあります。
    | それぞれのメッセージを調整して、アプリケーションに合わせてください。
    |
    */

    'accepted' => ':attribute を承認してください。',
    'accepted_if' => ':attribute は、:other が :value の場合に承認される必要があります。',
    'active_url' => ':attribute は有効なURLではありません。',
    'after' => ':attribute は :date の後の日付でなければなりません。',
    'after_or_equal' => ':attribute は :date と同日かそれ以降の日付でなければなりません。',
    'alpha' => ':attribute はアルファベットのみで構成されている必要があります。',
    'alpha_dash' => ':attribute はアルファベット、数字、ダッシュ、アンダースコアのみで構成されている必要があります。',
    'alpha_num' => ':attribute はアルファベットと数字のみで構成されている必要があります。',
    'array' => ':attribute は配列でなければなりません。',
    'ascii' => ':attribute は単バイトの英数字と記号のみを含む必要があります。',
    'before' => ':attribute は :date より前の日付でなければなりません。',
    'before_or_equal' => ':attribute は :date と同日かそれ以前の日付でなければなりません。',
    'between' => [
        'array' => ':attribute は :min と :max の間の項目でなければなりません。',
        'file' => ':attribute は :min と :max キロバイトの間でなければなりません。',
        'numeric' => ':attribute は :min と :max の間でなければなりません。',
        'string' => ':attribute は :min と :max 文字の間でなければなりません。',
    ],
    'boolean' => ':attribute フィールドは true または false でなければなりません。',
    'confirmed' => ':attribute の確認が一致しません。',
    'current_password' => 'パスワードが間違っています。',
    'date' => ':attribute は有効な日付ではありません。',
    'date_equals' => ':attribute は :date と同じ日付でなければなりません。',
    'date_format' => ':attribute は :format の形式と一致しません。',
    'decimal' => ':attribute は :decimal 桁の小数点以下が必要です。',
    'declined' => ':attribute は拒否する必要があります。',
    'declined_if' => ':attribute は :other が :value の場合に拒否する必要があります。',
    'different' => ':attribute と :other は異なるものでなければなりません。',
    'digits' => ':attribute は :digits 桁でなければなりません。',
    'digits_between' => ':attribute は :min と :max の間の桁数でなければなりません。',
    'dimensions' => ':attribute の画像の寸法が無効です。',
    'distinct' => ':attribute フィールドには重複する値があります。',
    'doesnt_end_with' => ':attribute は次のいずれかで終わってはいけません: :values。',
    'doesnt_start_with' => ':attribute は次のいずれかで始まってはいけません: :values。',
    'email' => ':attribute は有効なメールアドレスでなければなりません。',
    'ends_with' => ':attribute は次のいずれかで終わらなければなりません: :values。',
    'enum' => '選択された :attribute は無効です。',
    'exists' => '選択された :attribute は無効です。',
    'file' => ':attribute はファイルでなければなりません。',
    'filled' => ':attribute フィールドには値が必要です。',
    'gt' => [
        'array' => ':attribute は :value より多くの項目を含まなければなりません。',
        'file' => ':attribute は :value キロバイトより大きい必要があります。',
        'numeric' => ':attribute は :value より大きい必要があります。',
        'string' => ':attribute は :value 文字より大きい必要があります。',
    ],
    'gte' => [
        'array' => ':attribute は :value 項目以上でなければなりません。',
        'file' => ':attribute は :value キロバイト以上でなければなりません。',
        'numeric' => ':attribute は :value 以上でなければなりません。',
        'string' => ':attribute は :value 文字以上でなければなりません。',
    ],
    'image' => ':attribute は画像でなければなりません。',
    'in' => '選択された :attribute は無効です。',
    'in_array' => ':attribute フィールドは :other に存在しません。',
    'integer' => ':attribute は整数でなければなりません。',
    'ip' => ':attribute は有効なIPアドレスでなければなりません。',
    'ipv4' => ':attribute は有効なIPv4アドレスでなければなりません。',
    'ipv6' => ':attribute は有効なIPv6アドレスでなければなりません。',
    'json' => ':attribute は有効なJSON文字列でなければなりません。',
    'lowercase' => ':attribute は小文字でなければなりません。',
    'lt' => [
        'array' => ':attribute は :value より少ない項目を含まなければなりません。',
        'file' => ':attribute は :value キロバイトより小さい必要があります。',
        'numeric' => ':attribute は :value より小さい必要があります。',
        'string' => ':attribute は :value 文字より小さい必要があります。',
    ],
    'lte' => [
        'array' => ':attribute は :value 項目以下でなければなりません。',
        'file' => ':attribute は :value キロバイト以下でなければなりません。',
        'numeric' => ':attribute は :value 以下でなければなりません。',
        'string' => ':attribute は :value 文字以下でなければなりません。',
    ],
    'mac_address' => ':attribute は有効なMACアドレスでなければなりません。',
    'max' => [
        'array' => ':attribute は :max 項目以下でなければなりません。',
        'file' => ':attribute は :max キロバイト以下でなければなりません。',
        'numeric' => ':attribute は :max より大きくてはいけません。',
        'string' => ':attribute は :max 文字以下でなければなりません。',
    ],
    'max_digits' => ':attribute は :max 桁を超えてはいけません。',
    'mimes' => ':attribute は次のタイプのファイルでなければなりません: :values。',
    'mimetypes' => ':attribute は次のタイプのファイルでなければなりません: :values。',
    'min' => [
        'array' => ':attribute は少なくとも :min 項目を含まなければなりません。',
        'file' => ':attribute は少なくとも :min キロバイトでなければなりません。',
        'numeric' => ':attribute は少なくとも :min でなければなりません。',
        'string' => ':attribute は少なくとも :min 文字でなければなりません。',
    ],
    'min_digits' => ':attribute は少なくとも :min 桁でなければなりません。',
    'missing' => ':attribute フィールドは欠落していなければなりません。',
    'missing_if' => ':other が :value の場合、:attribute フィールドは欠落していなければなりません。',
    'missing_unless' => ':other が :value でない限り、:attribute フィールドは欠落していなければなりません。',
    'missing_with' => ':values が存在する場合、:attribute フィールドは欠落していなければなりません。',
    'missing_with_all' => ':values が存在する場合、:attribute フィールドは欠落していなければなりません。',
    'multiple_of' => ':attribute は :value の倍数でなければなりません。',
    'not_in' => '選択された :attribute は無効です。',
    'not_regex' => ':attribute の形式は無効です。',
    'numeric' => ':attribute は数字でなければなりません。',
    'password' => [
        'letters' => ':attribute には少なくとも1文字の文字が含まれていなければなりません。',
        'mixed' => ':attribute には少なくとも1文字の大文字と小文字が含まれていなければなりません。',
        'numbers' => ':attribute には少なくとも1つの数字が含まれていなければなりません。',
        'symbols' => ':attribute には少なくとも1つの記号が含まれていなければなりません。',
        'uncompromised' => '指定された :attribute はデータ漏洩に含まれています。別の :attribute を選んでください。',
    ],
    'present' => ':attribute フィールドは存在する必要があります。',
    'prohibited' => ':attribute フィールドは禁止されています。',
    'prohibited_if' => ':other が :value の場合、:attribute フィールドは禁止されています。',
    'prohibited_unless' => ':other が :values に存在しない限り、:attribute フィールドは禁止されています。',
    'prohibits' => ':attribute フィールドは :other の存在を禁止します。',
    'regex' => ':attribute の形式は無効です。',
    'required' => ':attribute フィールドは必須です。',
    'required_array_keys' => ':attribute フィールドには次の項目が含まれている必要があります: :values。',
    'required_if' => ':other が :value の場合、:attribute フィールドは必須です。',
    'required_if_accepted' => ':other が承認された場合、:attribute フィールドは必須です。',
    'required_unless' => ':other が :values に存在しない限り、:attribute フィールドは必須です。',
    'required_with' => ':values が存在する場合、:attribute フィールドは必須です。',
    'required_with_all' => ':values が存在する場合、:attribute フィールドは必須です。',
    'required_without' => ':values が存在しない場合、:attribute フィールドは必須です。',
    'required_without_all' => ':values が存在しない場合、:attribute フィールドは必須です。',
    'same' => ':attribute と :other は一致する必要があります。',
    'size' => [
        'array' => ':attribute は :size 項目を含まなければなりません。',
        'file' => ':attribute は :size キロバイトでなければなりません。',
        'numeric' => ':attribute は :size でなければなりません。',
        'string' => ':attribute は :size 文字でなければなりません。',
    ],
    'starts_with' => ':attribute は次のいずれかで始まる必要があります: :values。',
    'string' => ':attribute は文字列でなければなりません。',
    'timezone' => ':attribute は有効なタイムゾーンでなければなりません。',
    'unique' => ':attribute はすでに使用されています。',
    'uploaded' => ':attribute のアップロードに失敗しました。',
    'uppercase' => ':attribute は大文字でなければなりません。',
    'url' => ':attribute は有効なURLでなければなりません。',
    'ulid' => ':attribute は有効なULIDでなければなりません。',
    'uuid' => ':attribute は有効なUUIDでなければなりません。',

    /*
    |----------------------------------------------------------------------
    | カスタムバリデーションメッセージ
    |----------------------------------------------------------------------
    |
    | ここでは、「attribute.rule」という規則名で属性に対するカスタムメッセージを指定できます。
    | 特定の属性ルールに対するカスタム言語ラインを簡単に指定できます。
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |----------------------------------------------------------------------
    | カスタムバリデーション属性
    |----------------------------------------------------------------------
    |
    | 以下の言語ラインは、属性のプレースホルダーをより読みやすいものに置き換えるために使用されます。
    | 例えば、「email」を「E-Mail Address」に置き換えることができます。
    |
    */

    'attributes' => [
        'title'=>'件名',
        'content'=>'本文',
        'kana' => 'カナ', 
        'tel' => '電話番号', 
        'email' => 'メールアドレス', 
        'postcode' => '郵便番号', 
        'address' => '住所', 
        'birthday' => '誕生日', 
        'gender' => '性別' 
    ],

];
