<?php
include 'includes/html/header.php';
require_once("includes/userLogin/connection.php");
?>

<body>

    <div class="w3-content w3-container w3-padding-64" id="about">
        <h3 class="w3-center">What Is Rainwater Harvesting?</h3>
        <p class="w3-center"><em>About</em></p>
        <p>Rainwater harvesting is an expertise for collection and efficient storage of rainwater from different basement areas like rooftops of residential buildings, ground surface, rock catchments, etc. These techniques are very vast. They can be very artless techniques such as collection and storage using readily available, cheap utensils. They also can be some very intricate techniques such as building check dams. These methods are mostly used for water conservation. Usually, there are two basic ways of rainwater harvesting like surface runoff harvesting and rooftop rainwater harvesting. In the first method, rainwater flowing along the surface is collected in an underground tank. In the second method, rainwater is collected from roof catchment and stored in a tank. The harvested rainwater is the purest form of water source. So, it can be consumed directly. Rainwater collected from ground catchments may be poor in quality with respect to the bacteriological quality, whereas if rainwater is collected from well-maintained rooftop catchment systems and storage tanks, then that water is suitable for drinking. If water is collected from a dirty surface, then the collected water can be made utilizable by using a proper filtering system. Thereafter, it can be used for some the following purposes like drinking, culinary, bathing, laundry, toiletry purpose, watering gardens, compost making, birdbaths, recharging ponds and pools, washing vehicles, fire extinguishing, etc.</p>
        <div class="w3-row">
            <div class="w3-col m6 w3-center w3-padding-large">
                <p><b><i class="fa fa-user w3-margin-right"></i>My Project.</b></p><br>
                <img src="images/photoOfMyProject.png" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of My Project" width="500" height="333">
            </div>

            <!-- Hide this text on small devices -->
            <div class="w3-col m6 w3-hide-small w3-padding-large">
                <p class="text">Rainwater collection technologies have a very long history. It is as early as Roman civilization. It means the period is earlier than 2000 BC. Rainwater harvesting in Asia has also been carried out since the ninth century. In rural areas of South and Southeast Asia, rainwater is collected and conserved by constructing brush dams. In Israel, rainwater is collected and used both for farming and residential use. In Istanbul of the country Turkey, the world’s largest tank is created for collection of rainwater. In India also rainwater collection and utilization are practiced since long back using conventional methods. Thailand is a pioneer in applying innovation in rainwater collection since many hundred centuries back. However, recently the most recognized utilization of the innovation is done in Africa
                    <!-- Hide text read more -->
                    <span class="moreText">
                        <br>Increase volume of water bodies<br>
                        Many parts of the world have two kinds of seasons like rainy season and dry season. During dry season, there is very little or no rain. Due to this, the water bodies like pond, rivers, etc. are dried. By using these techniques, the water bodies can be recharged, and their volume can be increased.
                        <br>Lessen flood and soil erosion<br>
                        By storing rainwater, it reduces the surface runoff. This reduces the surface erosion. By capturing rainwater in reservoirs, the flood problem in large rainfalls is also diminished.
                        <br>Prevent overuse of underground water<br>
                        As population of a locality increases, its demand for water increases too. To meet this, underground water is used. Due to this reason, the level of underground water is decreasing rapidly. By using rainwater, the demand on groundwater is reduced.
                        <br>Save money<br>
                        Pumping up of underground water is very costly than that of rainwater harvest. So, the use of rainwater saves money.
                    </span>
                </p>
                <button class="readMoreButton">Read More.</button>
            </div>
        </div>
    </div>
    <div class="bgimg-2 w3-display-container w3-opacity-min" id="TheWay">
        <div class="w3-display-middle">
            <span class="w3-xxlarge w3-text-white w3-wide">HOW TO DO IT.</span>
        </div>
    </div>

    <!-- Phương thức -->
    <div class="w3-content w3-container w3-padding-64">
        <p class="w3-center"><em>Rainwater harvesting systems consist of three basic components such as the catchment area, the collection device, and the conveyance system as shown in.<br> Click on the images to make them bigger.</em></p><br>

        <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
        <div class="w3-row-padding w3-center">
            <div class="w3-col m3" id="text">
                <img src="images/product/product1.png" alt="Components of a rainwater harvesting system (source: https://slideplayer.com/slide/9100121/)." style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"><a style="text-decoration: none" href="product.php">Catchment area.</a>
            </div>

            <div class="w3-col m3">
                <img src="images/product/product2.png" alt="Rooftop catchment system (source: CTCN site)." style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"><a style="text-decoration: none" href="product.php">Rooftop catchment</a>
            </div>

            <div class="w3-col m3">
                <img src="images/product/product3.png" alt="Ground catchment system (source: CTCN site)." style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"><a style="text-decoration: none" href="product.php">Land surface catchment.</a>
            </div>

            <div class="w3-col m3">
                <img src="images/product/product4.png" alt="Conveyance system (source: Newsletter and Technical Publications, UNEP)." style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"><a style="text-decoration: none" href="product.php">Conveyance system.</a>
            </div>
        </div>

        <div class="w3-row-padding w3-center w3-section" id="moreText">
            <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px"><a style="text-decoration: none" href="product.php">More.</a></button>
        </div>
    </div>

    <div class="bgimg-2 w3-display-container w3-opacity-min" id="equipment">
        <div class="w3-display-middle">
            <span class="w3-xxlarge w3-text-white w3-wide">EQUIPMENTS.</span>
        </div>
    </div>

    <!-- Đồ dùng cần thiết -->
    <div class="w3-content w3-container w3-padding-64">
        <p class="w3-center"><em>The collected rainwater from the catchment area is required to be collected and stored in proper collection equipment. It can be a storage tank or a rainfall water container. Storage tanks for this purpose may be placed either above or under the ground. The tank needs to be fitted with tight cover for preventing algal growth and the breeding of mosquitos. Measure must be taken to reduce contamination of the stored water. Storage tanks can be cylinder-shaped containers made up of ferro-cement or mortar. The former container has a slightly armor-plated concrete base. On this base the cylindrical tank is mounted. Again two layers of light wire are enfolded over this tank surface as shown in. This serves as a frame for the container. The latter type container is a large vessel made up of mortar. This vessel is also wounded with light wires. In some cases, the storage tanks are concrete tanks or plastic jars. The storing capacity of rainwater is calculated considering different factors like the dry spell span, the volume of rainfall, and the consuming demand.<br> Click on the images to make them bigger.</em></p><br>

        <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
        <div class="w3-row-padding w3-center">
            <div class="w3-col m3">
                <img src="images/equipment/equip1.png" alt="Galvanized iron tank. (source: https://www.rainharvest.com/rainflo-3400-gallon-corrugated-steel-tank-rainwater-harvesting-package.asp)." style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
            </div>

            <div class="w3-col m3">
                <img src="images/equipment/equip2.png" alt="Ferro-cement tanks." style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
            </div>

            <div class="w3-col m3">
                <img src="images/equipment/equip3.png" alt="Concrete tank (Source: Taanka Wikipedia). (source: https://www.rainharvest.com/rainflo-3400-gallon-corrugated-steel-tank-rainwater-harvesting-package.asp)." style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
            </div>

            <div class="w3-col m3">
                <img src="images/equipment/equip4.png" alt="Plastic tanks (Source: Taanka Wikipedia)." style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
            </div>
        </div>

        <div class="w3-row-padding w3-center w3-section">
            <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px"><a style="text-decoration: none" href="equipment.php">More.</a></button>
        </div>
    </div>

    <!-- Modal for full size images on click -->
    <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
        <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <img id="img01" class="w3-image">
            <p id="caption" class="w3-opacity w3-large"></p>
        </div>
    </div>

    <!-- ảnh chèn giữa -->
    <div class="bgimg-3 w3-display-container w3-opacity-min">
        <div class="w3-display-middle">
            <a style="text-decoration: none" href="contact.php"><span class="w3-xxlarge w3-text-white w3-wide">CONTACT FOR MORE</span></a>
        </div>
    </div>

    <!-- Team card -->
    <div class="w3-container" style="padding:128px 16px" id="team">
        <h3 class="w3-center">THE TEAM</h3>
        <p class="w3-center w3-large">The ones who runs this company</p>
        <div class="w3-row-padding" style="margin-top:64px">
            <div class="w3-col m6 w3-margin-bottom">
                <div class="w3-card" style="text-align:center">
                    <img src="images/DamKhoiNguyen.jpg" alt="Jane" style="width:50%">
                    <div class="w3-container" style="text-align:left">
                        <h3>Dam Khoi Nguyen</h3>
                        <p class="w3-opacity">Web Designer</p>
                        <p>Tôi là Nguyên.</p>
                        <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"><a style="text-decoration: none" href="https://www.facebook.com/Mickey0246"> Contact</a></i></button></p>
                    </div>
                </div>
            </div>
            <div class="w3-col m6 w3-margin-bottom">
                <div class="w3-card" style="text-align:center">
                    <img src="images/NguyenTheLong.jpg" alt="Mike" style="width:50%; height:50%">
                    <div class="w3-container" style="text-align:left">
                        <h3>Nguyen The Long</h3>
                        <p class="w3-opacity">CEO & Founder</p>
                        <p>Tôi là Long.</p>
                        <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"><a style="text-decoration: none" href="https://www.facebook.com/long.t.nguyen.52"> Contact</a></i></button></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<?php
include 'includes/html/footer.php'
?>

<script src="js/main.js"></script>