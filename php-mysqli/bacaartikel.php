<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baca Artikel</title>
    <style>
        <?php include 'config.php'; ?>
        body {
            margin: 0;
            padding: 0;
            font-size: 1rem; /* Ukuran font disesuaikan */
            font-family: "Roboto", sans-serif;
            max-width: 50rem;
            padding: 2rem; /* Ukuran padding disesuaikan */
            margin: 2rem auto; /* Ukuran margin disesuaikan */
            background: #1a1a1a;
            color: #fff;
        }
        .main-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
        }
        img {
            width: 100%;
        }
        .headline {
            font-family: "Archivo Black", sans-serif;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: yellow;
            margin: 0;
            text-shadow: 10px 10px 2px magenta, -10px -10px 2px #0ebeff, -10px 10px 2px #fff, 10px -10px 2px magenta;
            font-size: 3rem; /* Ukuran font disesuaikan */
        }
        .subhead {
            font-size: 1.2rem; /* Ukuran font disesuaikan */
            font-weight: 300;
        }
        .highlight {
            font-style: italic;
            font-weight: bold;
            padding: 0.5rem 1rem; /* Ukuran padding disesuaikan */
            width: 70%;
        }
        .highlight-1 {
            color: magenta;
            background: yellow;
            box-shadow: 5px 5px 2px #0ebeff; /* Ukuran shadow disesuaikan */
        }
        .highlight-2 {
            color: yellow;
            background: #0ebeff;
            box-shadow: 5px 5px 2px magenta; /* Ukuran shadow disesuaikan */
        }
        .highlight-3 {
            color: yellow;
            background: magenta;
            box-shadow: 5px 5px 2px #0ebeff; /* Ukuran shadow disesuaikan */
        }
        .article-meta {
            max-width: 96rem;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: space-between;
        }
        .author {
            display: flex;
            align-items: center;
            margin-bottom: 1rem; /* Ukuran margin disesuaikan */
        }
        .author svg {
            height: 2rem; /* Ukuran icon disesuaikan */
            width: 2rem; /* Ukuran icon disesuaikan */
            margin: 0 0.5rem 0 0; /* Ukuran margin disesuaikan */
        }
        .author p {
            margin-right: 0.5rem; /* Ukuran margin disesuaikan */
            color: gray;
            font-style: bold;
        }
        .tag {
            border: 1px solid magenta;
            padding: 0.5rem 1rem;
            border-radius: 5rem;
            color: magenta;
            background-color: yellow;
            box-shadow: 3px 3px 2px magenta; /* Ukuran shadow disesuaikan */
            margin-right: 0.5rem; /* Ukuran margin disesuaikan */
            font-size: 0.8rem; /* Ukuran font disesuaikan */
        }
        .tag.featured {
            color: yellow;
            background-color: magenta;
            box-shadow: 3px 3px 2px #0ebeff; /* Ukuran shadow disesuaikan */
        }
        .article {
            font-size: 1rem; /* Ukuran font disesuaikan */
            line-height: 1.5; /* Ukuran line-height disesuaikan */
        }
        .article-para-1 {
            font-size: 1.2rem; /* Ukuran font disesuaikan */
            line-height: 1.5; /* Ukuran line-height disesuaikan */
            color: gray;
            margin-top: 2rem; /* Ukuran margin disesuaikan */
        }
        .article-row {
            display: flex;
            flex-direction: column;
            justify-content: stretch;
        }
        .article-col {
            flex: 1 1;
            justify-content: stretch;
        }
        aside {
            font-size: 1.2rem; /* Ukuran font disesuaikan */
            font-weight: bold;
            line-height: 1.2;
        }
        blockquote {
            text-indent: 0.5rem;
            box-shadow: -10px 0px 0px #0ebeff; /* Ukuran shadow disesuaikan */
        }
        .bq-long {
            border-left: 5px solid #0ebeff; /* Ukuran border disesuaikan */
            box-shadow: -10px 0px 0px yellow; /* Ukuran shadow disesuaikan */
        }
        .bq-short {
            border-left: 5px solid magenta; /* Ukuran border disesuaikan */
        }
        .bq-medium {
            box-shadow: -10px 0px 0px magenta; /* Ukuran shadow disesuaikan */
            border-left: 5px solid yellow; /* Ukuran border disesuaikan */
        }
        blockquote {
            text-indent: 0;
            hanging-punctuation: first;
        }
        .bq-short::before {
            content: open-quote;
            color: #0ebeff;
        }
        .bq-short::after {
            content: close-quote;
            color: magenta;
        }
        .bq-long::before {
            content: open-quote;
            color: magenta;
        }
        .bq-long::after {
            content: close-quote;
            color: yellow;
        }
        .bq-medium::before {
            content: open-quote;
            color: #0ebeff;
        }
        .bq-medium::after {
            content: close-quote;
            color: magenta;
        }
        figcaption {
            font-weight: bold;
            background: linear-gradient(to right, magenta, #0ebeff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        a {
            text-decoration: none;
            color: yellow;
            border-bottom: 2px solid magenta; /* Ukuran border disesuaikan */
            font-weight: bold;
        }
        a:hover {
            background: magenta;
            border-bottom: 2px solid #0ebeff; /* Ukuran border disesuaikan */
        }

        @media screen and (min-width: 768px) {
            body {
                max-width: 65rem;
            }
            .headline {
                font-size: 4.5rem; /* Ukuran font disesuaikan */
            }
            .subhead {
                font-size: 1.5rem; /* Ukuran font disesuaikan */
            }
            .tag {
                margin-right: 1rem; /* Ukuran margin disesuaikan */
                font-size: 1rem; /* Ukuran font disesuaikan */
            }
            aside {
                font-size: 1.5rem; /* Ukuran font disesuaikan */
            }
            .article-para-1 {
                font-size: 1.5rem; /* Ukuran font disesuaikan */
            }
        }
        @media screen and (min-width: 1024px) {
            body {
                max-width: 90rem;
            }
            .article-meta {
                flex-direction: row;
                align-items: center;
            }
            .author {
                margin-bottom: unset;
            }
            .article-row {
                flex-direction: row;
            }
            .article-col-1,
            .article-col-2 {
                margin-right: 1rem; /* Ukuran margin disesuaikan */
            }
        }
        @media screen and (min-width: 1200px) {
            body {
                max-width: 102.4rem;
            }
        }
    </style>
</head>
<body>
    <div class="main-container">
        <h1 class="headline">Daftar Artikel</h1>
        <div class="article-list">
            <?php
            $query = "SELECT id, title FROM artikel";
            $result = $koneksi->query($query);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<p><a href='bacaartikel.php?id=" . $row['id'] . "'>" . $row['title'] . "</a></p>";
                }
            } else {
                echo "Belum ada artikel.";
            }
            ?>
        </div>
        <div class="article-content">
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $query = "SELECT * FROM artikel WHERE id = ?";
                $stmt = $koneksi->prepare($query);
                $stmt->bind_param("i", $id);
                $stmt->execute();
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo "<h2 class='subhead'>" . $row['title'] . "</h2>";
                    echo "<div class='article-meta'>";
                    echo "<div class='author'><p><strong>Nama Penulis: </strong>" . $row['fullname'] . "</p></div>";
                    echo "<div class='tag'><strong>Jenis Artikel: </strong>" . $row['articleType'] . "</div>";
                    echo "</div>";
                    echo "<div class='article'><p>" . $row['text'] . "</p></div>";
                } else {
                    echo "Artikel tidak ditemukan.";
                }
                $stmt->close();
            }
            ?>
        </div>
    </div>
</body>
</html>
