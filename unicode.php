<?php
  class SedanFactory implements CarFactory {
      public function makeCar() {
        $lang = array(
        "stuff1" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuff2" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuff3" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuff4" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuff5" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuff7" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuff8" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuff9" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuff0" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuf1" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuf1" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuf2" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuf3" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "qtuff1" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "wtuff2" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "etuff3" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "rtuff4" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "ttuff5" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "ytuff7" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "utuff8" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "ituff9" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "otuff0" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "atuf1" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuf1" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "dtuf2" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "ftuf3" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuqf1" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuef2" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "sturf3" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stutf4" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuyf5" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuuf7" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuif8" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuof9" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stupf0" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stua1" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stus1" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stud2" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuf3" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "qtugf1" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "wtuhf2" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "etujf3" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "rtuf4" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "ttulff5" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "ytuçf7" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "utuaf8" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "itusf9" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "otuff0" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "atuf1" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stug1" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "dtuh2" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "ftuj3" => "têst str@ngæ chá®ã©têrs ±∑ü",
         "uff1" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "uff2" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "uff3" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "uff4" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "tuff5" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "tuff7" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "suff8" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "st,9" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuf.0" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuf-" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuf" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stu2" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuf3" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "qtuf1" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "wtu'ff2" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "etuf3" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "rtu9f4" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "ttu8f5" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "ytu7f7" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "utu6f8" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "itu5f9" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "otu4f0" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "atu31" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stu21" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "dtu12" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "ftuq3" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuwf1" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuef2" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "sturf3" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stutf4" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuyf5" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuuf7" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuif8" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuof9" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stupf0" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stua1" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stus1" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stud2" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stuf3" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "qtugf1" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "wtuhf2" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "etujf3" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "rtuk4" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "ttulff5" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "ytuçf7" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "utuzf8" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "ituxf9" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "otucf0" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "atuv1" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "stub1" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "dtun2" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "ftum3" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "1" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "3" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "2" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "4" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "5" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "6" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "8" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "7" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "q" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "w" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "e" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "r" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "t" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "y" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "u" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "i" => "têst str@ngæ chá®ã©têrs ±∑ü",
        "ø" => "têst str@ngæ chá®ã©têrs ±∑ü"
    }
  }
?>
