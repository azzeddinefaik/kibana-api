<?php

(new Dashboard())->addWidget(new Disk())
                 ->addWidget(new Memory())
                 ->generate();