## ECサイトを本格的に制作講座

## インストール方法

## インストール後の実施事項

画像のダミーデータはpublic/imagesフォルダ内にsample1.jpg 〜 sample6.jpgとして保存しています。 php artisan storage:linkでstorageフォルダにリンク後,

storage/app/public/productsフォルダ内に保存すると表示されます。

shopの画像を表示する場合はstorage/app/public/shopsフォルダを作成し画像を保存してください。

## git pushできなくなれば..

- [ ] git remote -vで確認
- [ ] git remote set-url origin git@github.com:****/****.gitとsshを入れてあげる
