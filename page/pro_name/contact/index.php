<?php
//下記のパス「demo」を変更
include_once $_SERVER['DOCUMENT_ROOT'].'/page/pro_name/assets/inc/config.php'; ?>
<!-- include header --> 
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/header.php'; ?>
<main>
  <section class="hea-top">
    <div class="container news">
      <h1 class="big-line">contact <span class="jp">お問い合わせ</span></h1>
    </div>
    <div class="bg-boder-radius list-news">
      <div class="container">
        <div class="contact-line">
          <h3>サービスに関するお問い合わせはこちら</h3>
          <ul>
            <li class="tell"><span>
              <img src="/<?php echo DIRNAME; ?>/assets/images/contact/tel_icon.svg">050-1288-3526</span>
              <small>受付時間 10：00～17:00　※土日祝を除く</small>
            </li>
            <li><a href=""><img src="/<?php echo DIRNAME; ?>/assets/images/contact/line.svg"></a></li>
          </ul>
        </div>
        <div class="content max-content">
                    <div class="box-contact">
                        <div class="step-contact">
                            <ul>
                                <li>
                                    <div class="item-step text-center">
                                        <div class="numb active">1</div>
                                        <p>問い合わせ内容入力</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="item-step text-center">
                                        <div class="numb">2</div>
                                        <p>内容確認</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="item-step text-center">
                                        <div class="numb">3</div>
                                        <p>完了</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="box-txt">
                            <p>必要事項をご入力の上、確認ボタンをクリックしてください。 </p>
                        </div>
                        <div class="form-contact max-content">
                            <form action="step02/index.html" id="form">
                                <div class="list-item-form">
                                    <div class="item">
                                        <div class="left">お問い合わせ区分<span>必須</span></div>
                                        <div class="right op-cic">
                                            <ul>
                                                <li>
                                                    <input type="radio" name="form-contact" value="サービスに関するお問い合わせ" id="ct-8">
                                                    <label for="ct-8">サービスに関するお問い合わせ</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="form-contact" value="広告出稿に関するお問い合わせ" checked="" id="ct-9">
                                                    <label for="ct-9">広告出稿に関するお問い合わせ</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="form-contact" value="広告出稿に関するお問い合わせ" id="ct-10">
                                                    <label for="ct-10">広告出稿に関するお問い合わせ</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item">
                    <div class="left">お問い合わせ内容 <span>必須</span></div>
                    <div class="right op-cic pb-3"><textarea name="" placeholder="入力して下さい" id="" cols="30" rows="10"></textarea></div>
                  </div>
                                    <div class="item">
                                        <div class="left">お名前 <span>必須</span></div>
                                        <div class="right"><input type="text" id="name" class="max-inp" placeholder="入力してください"></div>
                                    </div>
                                    <div class="item">
                                        <div class="left">お名前（ふりがな）<span>必須</span></div>
                                        <div class="right"><input type="text" id="name" class="max-inp" placeholder="入力してください"></div>
                                    </div>
                                    <div class="item">
                                        <div class="left">会社・団体名</div>
                                        <div class="right"><input type="text" id="name" class="max-inp" placeholder="入力してください"></div>
                                    </div>
                                    <div class="item">
                                        <div class="left">メールアドレス <span>必須</span></div>
                                        <div class="right"><input type="text" id="" class="max-inp" placeholder="入力してください"></div>
                                    </div>
                                    <div class="item">
                                        <div class="left one-check">メールアドレス <br>（確認用）<span>必須</span></div>
                                        <div class="right"><input type="text" id="" class="max-inp" placeholder="入力してください"></div>
                                    </div>
                                    <div class="item">
                    <div class="left">電話番号 <span>必須</span></div>
                    <div class="right"><input type="text" class="max-inp" placeholder="例) 0310001000 ※半角数字ハイフン(-)不要"></div>
                  </div>
                  <figure>住所</figure>
                                    <div class="item">
                                        <div class="left">郵便番号 <span>必須</span></div>
                                        <div class="right">
                                            <div class="otp-sub">
                                                <input type="text" class="inp-otp" placeholder="1001000">
                                                <div class="btn-click btn-path-top"><button>住所を自動入力</button></div>
                                            </div>
                                        </div>
                                        <div class="left">都道府県<span>必須</span></div>
                                        <div class="right">
                                            <div class="choose-select max-inp">
                                                <select name="" id="" class="">
                                                    <option value="">選択してください</option>
                                                    <option value="">選択してください</option>
                                                    <option value="">選択してください</option>
                                                    <option value="">選択してください</option>
                                                    <option value="">選択してください</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="left">住所<span>必須</span></div>
                    <div class="right"><input type="text" placeholder="市区町村、番地など 例) 中央区日本橋1-1"></div>
                    <div class="left">建物名<span>必須</span></div>
                    <div class="right"><input type="text" placeholder="例) XXXビル000など"></div>
                                    </div>
                                </div>
                                <div class="box-text-scroll">
                                    <div class="scrollbar" id="style-1">
                                        <div class="force-overflow">
                                            <p>当社は、お客様個人を識別できる情報（以下「個人情報」といいます。）を適切に保護する為に、以下の取り組みを実施いたします。</p>
                                            <ul>
                                                <li>1.法令の遵守 <br>当社は、個人情報保護に関する関係法令、国が定める指針等及び社内規程を遵守致します。</li>
                                                <li>2.個人情報の取得<br> 当社は、個人情報を取得する際には、その利用目的を明示し、お客様の同意の範囲内で、適正かつ公正な手段によって取得いたします。</li>

                                                <li>3.利用目的 <br>当社は、お客様からご提供いただいた個人情報を、お客様とのご契約上の責務を果たすため、およびお客様に有用な情報をご提供するために利用いたします。</li>

                                                <li>4.第三者提供 <br> 当社は、お客様の個人情報をあらかじめお客様の同意をいただいている場合および法令等で定められた場合、または当社と機密保持契約を締結している業務委託先に利用目的の達成に必要な範囲内で開示する場合を除き、第三者へ開示いたしません。</li>
                                                <li>5.管理体制 <br> 当社は、お客様の個人情報保護のため、情報管理責任者や個人情報を取り扱う部門毎に部門別情報管理者を置き、個人情報の適切な管理に努めます。 また、業務に従事する者に対して適切な教育を実施いたします。</li>
                                                <li>6.安全管理措置 <br>当社は、お客様からご提供いただいた個人情報に対して、不正アクセス・紛失・漏洩などを防止するためのセキュリティ対策を実施いたします。</li>
                                        </div>
                                    </div>
                                </div>
                                <div class="remember">
                                    <input type="checkbox" id="fruit1" name="fruit-1" value="remember">
                                    <label for="fruit1">「個人情報の取り扱い」に同意する</label>
                                </div>
                                <div class="btn-contact">
                                    <button type="submit" class="path-bott">入力内容を確認する</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
      </div>
    </div> <!-- end-bg-boder-radius -->
  </section>
</main>

<!-- include footer --> 
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/footer.php'; ?>