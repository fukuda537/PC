<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7JUDGE クローン - フロントエンドサンプル</title>
    <style>
        /* -------------------------- */
        /* Basic Reset & Layout */
        /* -------------------------- */
        body {
            font-family: 'Hiragino Kaku Gothic ProN', 'Meiryo', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* -------------------------- */
        /* Header */
        /* -------------------------- */
        header {
            background-color: #004d40; /* 濃い緑色 */
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
            font-size: 14px;
        }

        /* -------------------------- */
        /* Parent Tabs (Main Tabs) */
        /* -------------------------- */
        .parent-tabs {
            display: flex;
            background-color: #00796b; /* 明るい緑色 */
            border-bottom: 2px solid #004d40;
        }

        .parent-tab-button {
            flex-grow: 1;
            padding: 15px 0;
            text-align: center;
            cursor: pointer;
            color: white;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .parent-tab-button:hover {
            background-color: #00695c;
        }

        .parent-tab-button.active {
            background-color: #fff;
            color: #00796b;
            border-top: 3px solid #ffab00; /* 強調色 */
        }

        /* -------------------------- */
        /* Content Sections */
        /* -------------------------- */
        .tab-content {
            padding: 20px;
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        /* -------------------------- */
        /* Tab1: 全国スケジュール */
        /* -------------------------- */
        .search-options {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .search-options > div {
            flex: 1;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
            background-color: #f9f9f9;
            cursor: pointer;
            font-weight: bold;
        }

        /* Child Tabs (Schedule/Result) */
        .child-tabs {
            display: flex;
            margin-bottom: 15px;
            border-bottom: 2px solid #ddd;
        }

        .child-tab-button {
            padding: 10px 20px;
            cursor: pointer;
            font-weight: bold;
            color: #666;
            background-color: #eee;
            border-radius: 5px 5px 0 0;
            border: 1px solid #ddd;
            border-bottom: none;
            margin-right: 5px;
        }

        .child-tab-button.active {
            color: #00796b;
            background-color: #fff;
            border: 1px solid #00796b;
            border-bottom: 1px solid #fff;
        }

        /* Event List Styling */
        .event-list-item {
            border: 1px solid #eee;
            padding: 15px;
            margin-bottom: 10px;
            border-left: 5px solid #ffab00; /* 強調ライン */
            background-color: #fff;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        }

        .event-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 5px;
            font-size: 16px;
        }

        .event-date {
            font-weight: bold;
            color: #d32f2f; /* 赤色 */
        }

        .store-info {
            margin-top: 5px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .store-name {
            font-weight: bold;
            color: #004d40;
            text-decoration: none;
        }

        .rating {
            font-size: 14px;
            color: #f9a825; /* 星の色 */
        }

        .rating::before {
            content: '★';
        }

        .details {
            font-size: 14px;
            color: #666;
            margin-top: 5px;
        }

        .result-button a {
            display: inline-block;
            padding: 5px 10px;
            background-color: #00796b;
            color: white;
            text-decoration: none;
            border-radius: 3px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">SEVEN JUDGE</div>
            <div class="nav-links">
                <a href="#">ホーム</a>
                <a href="#">お気に入り</a>
                <a href="#">ログイン</a>
            </div>
        </header>

        <div class="parent-tabs">
            <div class="parent-tab-button active" data-tab-id="parent1">全国のスケジュール</div>
            <div class="parent-tab-button" data-tab-id="parent2">ホール情報</div>
        </div>

        <div id="parent1" class="tab-content active">
            <h2>全国スケジュール</h2>
            <div class="search-options">
                <div onclick="alert('エリア選択のポップアップを表示')">エリアを選択</div>
                <div onclick="alert('店舗名で検索フィールドを表示')">店舗名で検索</div>
            </div>

            <div class="child-tabs">
                <div class="child-tab-button active" data-parent-id="parent1" data-child-id="child1">スケジュール</div>
                <div class="child-tab-button" data-parent-id="parent1" data-child-id="child2">結果</div>
            </div>

            <div id="parent1-child1" class="child-tab-content active">
                <h3>📅 今後のスケジュール</h3>
                
                <div class="event-list-item">
                    <div class="event-header">
                        <span class="event-date">12月10日（水）</span>
                        <span class="details">抽選時間：9時45分【PR】</span>
                    </div>
                    <div class="store-info">
                        <span>[大阪府]</span>
                        <a href="#" class="store-name">ベラジオ寝屋川店</a>
                        <span class="rating">4.5 (84件)</span>
                    </div>
                </div>

                <div class="event-list-item">
                    <div class="event-header">
                        <span class="event-date">12月11日（木）</span>
                        <span class="details">L化物語, L東京リベンジャーズなど</span>
                    </div>
                    <div class="store-info">
                        <span>[大阪府]</span>
                        <a href="#" class="store-name">ガリバー東大阪店</a>
                        <span class="rating">4.2 (32件)</span>
                    </div>
                </div>
            </div>

            <div id="parent1-child2" class="child-tab-content">
                <h3>📊 直近の結果</h3>
                
                <div class="event-list-item">
                    <div class="event-header">
                        <span class="event-date">12月8日（月）</span>
                        <span class="result-button"><a href="#">結果を見る</a></span>
                    </div>
                    <div class="store-info">
                        <span>[大阪府]</span>
                        <a href="#" class="store-name">パラッツォ大阪三国店</a>
                        <span class="rating">5.0</span>
                    </div>
                </div>

                <div class="event-list-item">
                    <div class="event-header">
                        <span class="event-date">12月7日（日）</span>
                        <span class="result-button"><a href="#">結果を見る</a></span>
                    </div>
                    <div class="store-info">
                        <span>[大阪府]</span>
                        <a href="#" class="store-name">HYPER ARROW泉北店</a>
                        <span class="rating">4.0</span>
                    </div>
                </div>
            </div>
            
            <p style="text-align: center; font-size: 12px; color: #999; margin-top: 20px;">
                ※表示は直近のデータです。詳細は店舗詳細ページをご覧ください。
            </p>
        </div>

        <div id="parent2" class="tab-content">
            <h2>ホール情報</h2>
            <p>このタブには、店舗名一覧や特集記事などのホールに関する情報が表示されます。（現在はダミーコンテンツです）</p>
            <p>（例）<br>・お気に入り店舗一覧<br>・注目ホールリスト</p>
        </div>
        
        <hr>

        <footer>
            <div style="text-align: center; padding: 10px; font-size: 12px; color: #666;">
                <a href="#" style="color: #666; text-decoration: none;">利用規約</a> | 
                &copy; 2024 SEVEN JUDGE. All Rights Reserved.
            </div>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // --------------------------
            // Parent Tab Logic
            // --------------------------
            const parentTabs = document.querySelectorAll('.parent-tab-button');
            const parentContents = document.querySelectorAll('.tab-content');

            parentTabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    const tabId = tab.getAttribute('data-tab-id');

                    // Remove active class from all parent tabs and contents
                    parentTabs.forEach(t => t.classList.remove('active'));
                    parentContents.forEach(c => c.classList.remove('active'));

                    // Add active class to the clicked parent tab and its content
                    tab.classList.add('active');
                    document.getElementById(tabId).classList.add('active');

                    // If switching to a parent tab that has child tabs, ensure the first child is active
                    if (tabId === 'parent1') {
                        activateChildTab('parent1', 'child1');
                    }
                });
            });

            // --------------------------
            // Child Tab Logic (within Parent 1)
            // --------------------------
            const childTabs = document.querySelectorAll('.child-tab-button');
            
            function activateChildTab(parentId, childId) {
                const targetId = `${parentId}-${childId}`;
                
                // Deactivate all child tabs and contents for the current parent
                document.querySelectorAll(`#${parentId} .child-tab-button`).forEach(t => t.classList.remove('active'));
                document.querySelectorAll(`#${parentId} .child-tab-content`).forEach(c => c.classList.remove('active'));

                // Activate the selected child tab and its content
                document.querySelector(`.child-tab-button[data-child-id="${childId}"][data-parent-id="${parentId}"]`).classList.add('active');
                document.getElementById(targetId).classList.add('active');
            }

            childTabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    const parentId = tab.getAttribute('data-parent-id');
                    const childId = tab.getAttribute('data-child-id');
                    activateChildTab(parentId, childId);
                });
            });

            // Initial activation for the first child tab
            activateChildTab('parent1', 'child1');
        });
    </script>
</body>
</html>
```