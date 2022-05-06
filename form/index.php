<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
        <title>アンケート</title>
        <link rel="stylesheet" href="stylesheet.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
        <script type="text/javascript" src="./autokana-master/jquery.autoKana.js"></script>
        <script type="text/javascript" src="./javascript.js">
            </script>
    </head>

    <body>


            <?php
            // try {
            // $db = new PDO('mysql:dbname=test;host=127.0.0.1;charset=utf8','root',"");
            // echo "接続OK！";
            // } catch (PDOException $e) {
            // echo 'DB接続エラー！: ' . $e->getMessage();
            // }
            ?>

        <section class="title">
            <div class="top-decoration"></div>
            <h1>アンケートフォーム</h1>
            <div class="border"></div>
            <p class="index_overview">* 必須項目</p>
        </section>

        <form class="h-adr" action="./check.php" method="post" >
            <span class="p-country-name" style="display:none;">Japan</span>

            <section class="name">
                <div class="section-inner">
                    <h2 class="required">1.氏名</h2>
                    <div class="flex">
                        <div class="input-border"><input type="text" name="last_name" maxlength="10" placeholder="性" required></div>
                        <div class="input-border"><input type="text" name="first_name" maxlength="10" placeholder="名" required></div>
                    </div>
                </div>
            </section>

            <section class="name_f">
                <div class="section-inner">
                    <h2 class="required">2.フリガナ</h2>
                    <div class="flex">
                        <div class="input-border"><input type="text" name="last_name-f" maxlength="15" placeholder="セイ" required></div>
                        <div class="input-border"><input type="text" name="first_name-f" maxlength="15" placeholder="メイ" required></div>
                    </div>
                </div>
            </section>

            <section class="birthday">
                <div class="section-inner">
                    <h2 class="required">3.生年月日</h2>
                    <div class="flex">
                        <div class="input-border">
                            <select name="birth_year" required>
                                <option value="">-</option>
                                <option value="1900">1900</option>
                                <option value="1901">1901</option>
                                <option value="1902">1902</option>
                                <option value="1903">1903</option>
                                <option value="1904">1904</option>
                                <option value="1905">1905</option>
                                <option value="1906">1906</option>
                                <option value="1907">1907</option>
                                <option value="1908">1908</option>
                                <option value="1909">1909</option>
                                <option value="1910">1910</option>
                                <option value="1911">1911</option>
                                <option value="1912">1912</option>
                                <option value="1913">1913</option>
                                <option value="1914">1914</option>
                                <option value="1915">1915</option>
                                <option value="1916">1916</option>
                                <option value="1917">1917</option>
                                <option value="1918">1918</option>
                                <option value="1919">1919</option>
                                <option value="1920">1920</option>
                                <option value="1921">1921</option>
                                <option value="1922">1922</option>
                                <option value="1923">1923</option>
                                <option value="1924">1924</option>
                                <option value="1925">1925</option>
                                <option value="1926">1926</option>
                                <option value="1927">1927</option>
                                <option value="1928">1928</option>
                                <option value="1929">1929</option>
                                <option value="1930">1930</option>
                                <option value="1931">1931</option>
                                <option value="1932">1932</option>
                                <option value="1933">1933</option>
                                <option value="1934">1934</option>
                                <option value="1935">1935</option>
                                <option value="1936">1936</option>
                                <option value="1937">1937</option>
                                <option value="1938">1938</option>
                                <option value="1939">1939</option>
                                <option value="1940">1940</option>
                                <option value="1941">1941</option>
                                <option value="1942">1942</option>
                                <option value="1943">1943</option>
                                <option value="1944">1944</option>
                                <option value="1945">1945</option>
                                <option value="1946">1946</option>
                                <option value="1947">1947</option>
                                <option value="1948">1948</option>
                                <option value="1949">1949</option>
                                <option value="1950">1950</option>
                                <option value="1951">1951</option>
                                <option value="1952">1952</option>
                                <option value="1953">1953</option>
                                <option value="1954">1954</option>
                                <option value="1955">1955</option>
                                <option value="1956">1956</option>
                                <option value="1957">1957</option>
                                <option value="1958">1958</option>
                                <option value="1959">1959</option>
                                <option value="1960">1960</option>
                                <option value="1961">1961</option>
                                <option value="1962">1962</option>
                                <option value="1963">1963</option>
                                <option value="1964">1964</option>
                                <option value="1965">1965</option>
                                <option value="1966">1966</option>
                                <option value="1967">1967</option>
                                <option value="1968">1968</option>
                                <option value="1969">1969</option>
                                <option value="1970">1970</option>
                                <option value="1971">1971</option>
                                <option value="1972">1972</option>
                                <option value="1973">1973</option>
                                <option value="1974">1974</option>
                                <option value="1975">1975</option>
                                <option value="1976">1976</option>
                                <option value="1977">1977</option>
                                <option value="1978">1978</option>
                                <option value="1979">1979</option>
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                                <option value="2028">2028</option>
                                <option value="2029">2029</option>
                                <option value="2030">2030</option>
                                </select>年
                        </div>
                        <div class="input-border">
                            <select name="birth_month" required>
                                <option value="">-</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                </select>月
                        </div>
                        <div class="input-border">
                            <select name="birth_day" required>
                                <option value="">-</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                                </select>日
                        </div>
                    </div>
                </div>
            </section>

            <section class="gender">
                <div class="section-inner">
                    <h2 class="required">4.性別</h2>
                    <input type="radio" name="gender" value="1">男
                    <input type="radio" name="gender" value="2">女
                    <input type="radio" name="gender" value="3">その他
                </div>
            </section>

            <section class="postalCode">
                <div class="section-inner">
                    <h2 class="required">5.郵便番号<span>（-を除く7ケタ）</span></h2>
                    <div class="input-border"><input class="p-postal-code inner-design" type="number" name="postalCode" maxlength="7" placeholder="0000000" required></div>
                </div>
            </section>

            <section class="addles">
                <div class="section-inner">
                    <h2 class="required">6.住所</h2>
                    <div class="flex">
                        <div class="input-border">
                            <select class="p-region-id inner-design" name="addles-a" required>
                                <option value="">--</option>
                                <option value="1">北海道</option>
                                <option value="2">青森県</option>
                                <option value="3">岩手県</option>
                                <option value="4">宮城県</option>
                                <option value="5">秋田県</option>
                                <option value="6">山形県</option>
                                <option value="7">福島県</option>
                                <option value="8">茨城県</option>
                                <option value="9">栃木県</option>
                                <option value="10">群馬県</option>
                                <option value="11">埼玉県</option>
                                <option value="12">千葉県</option>
                                <option value="13">東京都</option>
                                <option value="14">神奈川県</option>
                                <option value="15">新潟県</option>
                                <option value="16">富山県</option>
                                <option value="17">石川県</option>
                                <option value="18">福井県</option>
                                <option value="19">山梨県</option>
                                <option value="20">長野県</option>
                                <option value="21">岐阜県</option>
                                <option value="22">静岡県</option>
                                <option value="23">愛知県</option>
                                <option value="24">三重県</option>
                                <option value="25">滋賀県</option>
                                <option value="26">京都府</option>
                                <option value="27">大阪府</option>
                                <option value="28">兵庫県</option>
                                <option value="29">奈良県</option>
                                <option value="30">和歌山県</option>
                                <option value="31">鳥取県</option>
                                <option value="32">島根県</option>
                                <option value="33">岡山県</option>
                                <option value="34">広島県</option>
                                <option value="35">山口県</option>
                                <option value="36">徳島県</option>
                                <option value="37">香川県</option>
                                <option value="38">愛媛県</option>
                                <option value="39">高知県</option>
                                <option value="40">福岡県</option>
                                <option value="41">佐賀県</option>
                                <option value="42">長崎県</option>
                                <option value="43">熊本県</option>
                                <option value="44">大分県</option>
                                <option value="45">宮崎県</option>
                                <option value="46">鹿児島県</option>
                                <option value="47">沖縄県</option>
                            </select>
                        </div>
                        <div class="input-border"><input class="p-locality p-street-address p-extended-address inner-design"  type="text"  name="addles-b" maxlength="15" required></div>
                    </div>
                </div>
            </section>

            <section class="addles_more">
                <div class="section-inner">
                    <h2 class="required">7.住所<span>（番地・部屋番号・建物名）</span></h2>
                    <div class="input-border"><input type="text" name="addles-c" maxlength="30" required></div>
                </div>
            </section>

            <section class="experience">
                <div class="section-inner">
                    <h2 class="required">8.経験のある言語</h2>
                    <input type="checkbox" name="experience[]" value="HTML/CSS">HTML/CSS
                    <input type="checkbox" name="experience[]" value="JavaScript">JavaScript
                    <input type="checkbox" name="experience[]" value="PHP">PHP
                    <input type="checkbox" name="experience[]" value="Python">Python
                    <input type="checkbox" name="experience[]" value="Rudy">Rudy
                    <input type="checkbox" name="experience[]" value="C++">C++
                    <input type="checkbox" name="experience[]" value="C#">C#
                </div>
            </section>

            <section class="pr">
                <div class="section-inner">
                    <h2 class="required">9.自己PR</h2>
                    <div class="input-border"><textarea name="PR" cols="30" rows="6" maxlength="200" placeholder="回答を入力" required></textarea></div>
                </div>
            </section>

            <input class="btn" type="submit" value="確認画面へ移る" >


        </form>

     </body>
</html>