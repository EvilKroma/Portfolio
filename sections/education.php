<section id="education">
<h3 class="section_titre">Mon parcours</h3>
<style>

    .timeline-container {
        display: flex;
        justify-content: space-around;
        align-items: center;
        width: 80%;
        max-width: 800px;
        padding: 20px;
        position: relative;
    }
    .line {
        position: absolute;
        height: 4px;
        width: 100%;
        background-color: #ddd;
        top: 50%;
        left: 0;
        z-index: 1;
    }
    .point {
        position: relative;
        z-index: 2;
        display: flex;
        flex-direction: column;
        align-items: center;
        cursor: pointer;
        margin: 0 10px;
        transition: color 0.3s;
    }
    .point a {
        text-decoration: none;
        color: #333;
        padding: 5px 10px;
        font-weight: bold;
    }
    .point a:hover {
        color: #007acc;
    }
    .circle {
        height: 20px;
        width: 20px;
        background-color: #007acc;
        border-radius: 50%;
        margin-bottom: 10px;
    }
    .info-box {
        background-color: #ffffff;
        border: 2px solid #007acc;
        border-radius: 8px;
        padding: 10px;
        text-align: center;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s;
        width: auto;
    }
    .info-box:hover {
        transform: scale(1.1);
    }
    .date {
        color: #666;
        font-size: 0.9em;
        margin-top: 5px;
    }
</style>
<section class="design-section">
    <div class="timeline-container">
        <div class="line"></div>

        <div class="point" style="left: 10%;">
            <div class="circle"></div>
            <a class="info-box">
                <span>Lycée Blaise Pascal</span>
                <div class="date">2020 - 2023</div>
            </a>
        </div>

        <div class="point" style="left: 10%;">
            <div class="circle"></div>
            <a href="pages_education/IPSSI.php" class="info-box">
                <span>Ecole Ipssi</span>
                <p>BTS SIO SLAM</p>
                <div class="date">2023 - 2025</div>
            </a>
        </div>
    </div>
</section>
</section>