<?php

class Review extends BaseModel {
    public function homepageReview()
    {
        return $this->get('SELECT `reviews`.`id`,`reviews`.`customer`, `reviews`.`cover_img`,`reviews`.`avatar_img`, `reviews`.`rating`, `reviews`.`content` FROM reviews ORDER BY `reviews`.`created_at` DESC;');
    }
}
