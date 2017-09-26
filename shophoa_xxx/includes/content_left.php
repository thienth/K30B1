<div id="sidebar" class="left">
    	<div class="sidebar_box"><span class="bottom"></span>
            <h3>Chủ đề hoa</h3>   
            <div class="content"> 
                <ul class="sidebar_list">
                    <?php
					include_once("models/m_chu_de.php");
                    $model = new M_chu_de();
                    $chuDe = $model->Doc_chu_de();
                    foreach ($chuDe as $cd) {?>

                        <li>
                            <a href="hoa_theo_chu_de.php?MaCD=<?= $cd->MaCD?>"><?= $cd->TenCD?></a>
                        </li>
                    <?php
                    }
					?>
                </ul>
            </div>
        </div>
        
    </div>