<h1>お問い合わせフォーム</h1>
<h2>環境構築</h2>
<h6>Dockerビルド</h6>
 <div>1. git clone git@github.com:coachtech-material/laravel-docker-template.git</div>
 <div>2. docker-compose up -d --build</div>
<h6>Laravel環境構築</h6>
 <div>1. docker-compose exec php bash</div>
 <div>2. comporser install</div>
 <div>3. .env.exampleファイルから.envを作成し、環境変数を変更</div>
 <div>4. php artisan key:generate</div>
 <div>5. php artisan migrate</div>
 <div>6. php artisan db:seed</div>
<h2>使用技術</h2>
<ul>
    <li>PHP 7.4.9</li>
    <li>Laravel 8.0</li>
    <li>MySQL 8.0.26</li>
</ul>
<h2>URL</h2>
<ul>
    <li>開発環境：http://localhost/</li>
    <li>phpMyAdmin：http://localhost:8080/</li>
</ul>
