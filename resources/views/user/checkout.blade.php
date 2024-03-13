<p>決済ページヘリダイレクトします</p>

<script src="https://js.stripe.com/v3/"></script>
{{-- StripeのJavaScriptライブラリ（V3）をページに読み込んでいます。これにより、Stripeの機能をフロントエンドで使用する準備が整います。 --}}

<script>

const publicKey = "{{ $publicKey }}"//サーバー側から渡された公開キー(StripeのAPIを使用するために必要)

const stripe = Stripe(publicKey)//Stripe(publicKey)で初期化してstripe変数に

// 画面読み込み処理

 window.onload = function(){
    // ページ全てのリソースが読み込まれた後に実行されます。

 stripe.redirectToCheckout({//ユーザーをStripeの決済ページへリダイレクトします

 sessionId:'{{ $checkout_session->id }}'//stripeで作成した情報(idは作成時、自動で作られている)

 }).then(function (result){
    // 何らかの理由でチェックアウトページへのリダイレクトが失敗した場合、指定されたURL（user.cart.indexルートへのリダイレクト）にフォールバックします。

 window.location.href="{{ route('user.cart.index') }}"//NGだったらuser.cart.indexに戻す

 });
 }

</script>
