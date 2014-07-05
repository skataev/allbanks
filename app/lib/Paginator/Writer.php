<?php

namespace Paginator;

class Writer
{
    const ITEM_PER_PAGE_DEFAULT = 10;

    public static function get_nav_list($countAll, $page, $urlPattern = '', $perPage = self::ITEM_PER_PAGE_DEFAULT)
    {
        $adjacents = 2;
        $topNav = '';

        /* Get data. */

        if ($page == 0) {
            $page = 1;
        }
        $prev = $page - 1;
        $next = $page + 1;
        $lastpage = ceil($countAll / $perPage);
        $lpm1 = $lastpage - 1;


        $pagination = '';
        if ($lastpage > 1) {

            if ($page > 1) {
                $topNav .= " <a href=\"" . str_replace(
                        "%p",
                        $prev,
                        $urlPattern
                    ) . "\" class=\"nounder\" title=\"$prev\" ><span>next</span> </a>";
            } else {
                $topNav .= " <span class=\"nounder\"><span>next</span> </span>";
            }

            //pages
            if ($lastpage < 7 + ($adjacents * 2)) //not enough pages to bother breaking it up
            {
                for ($counter = 1; $counter <= $lastpage; $counter++) {
                    if ($counter == $page) {
                        $pagination .= " <span class=\"nav_link_active\">$counter</span> ";
                    } else {
                        $pagination .= " <a href=\"" . str_replace(
                                "%p",
                                $counter,
                                $urlPattern
                            ) . "\" title=\"$counter\" class=\"nav_link\">$counter</a> ";
                    }
                }
            } elseif ($lastpage > 5 + ($adjacents * 2)) //enough pages to hide some
            {
                //close to beginning; only hide later pages
                if ($page < 1 + ($adjacents * 2)) {
                    for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++) {
                        if ($counter == $page) {
                            $pagination .= " <span class=\"nav_link_active\">$counter</span> ";
                        } else {
                            $pagination .= " <a href=\"" . str_replace(
                                    "%p",
                                    $counter,
                                    $urlPattern
                                ) . "\" title=\"$counter\" class=\"nav_link\">$counter</a> ";
                        }
                    }
                    $pagination .= " ... ";
                    $pagination .= " <a href=\"" . str_replace(
                            "%p",
                            $lpm1,
                            $urlPattern
                        ) . "\" title=\"$lpm1\" class=\"nav_link\">$lpm1</a> ";
                    $pagination .= " <a href=\"" . str_replace(
                            "%p",
                            $lastpage,
                            $urlPattern
                        ) . "\" title=\"$lastpage\" class=\"nav_link\">$lastpage</a> ";
                } //in middle; hide some front and some back
                elseif ($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2)) {
                    $pagination .= " <a href=\"" . str_replace(
                            "%p",
                            1,
                            $urlPattern
                        ) . "\" title=\"1\" class=\"nav_link\">1</a> ";
                    $pagination .= " <a href=\"" . str_replace(
                            "%p",
                            2,
                            $urlPattern
                        ) . "\" title=\"2\" class=\"nav_link\">2</a> ";
                    $pagination .= " ... ";
                    for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++) {
                        if ($counter == $page) {
                            $pagination .= " <span class=\"nav_link_active\">$counter</span> ";
                        } else {
                            $pagination .= " <a href=\"" . str_replace(
                                    "%p",
                                    $counter,
                                    $urlPattern
                                ) . "\" title=\"$counter\"  >$counter</a> ";
                        }
                    }
                    $pagination .= "...";
                    $pagination .= " <a href=\"" . str_replace(
                            "%p",
                            $lpm1,
                            $urlPattern
                        ) . "\" title=\"$lpm1\" class=\"nav_link\">$lpm1</a> ";
                    $pagination .= " <a href=\"" . str_replace(
                            "%p",
                            $lastpage,
                            $urlPattern
                        ) . "\" title=\"$lastpage\" class=\"nav_link\">$lastpage</a> ";
                } //close to end; only hide early pages
                else {
                    $pagination .= " <a href=\"" . str_replace(
                            "%p",
                            1,
                            $urlPattern
                        ) . "\" title=\"1\" class=\"nav_link\">1</a> ";
                    $pagination .= " <a href=\"" . str_replace(
                            "%p",
                            2,
                            $urlPattern
                        ) . "\" title=\"2\" class=\"nav_link\">2</a> ";
                    $pagination .= " ... ";
                    for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++) {
                        if ($counter == $page) {
                            $pagination .= " <span class=\"nav_link_active\">$counter</span> ";
                        } else {
                            $pagination .= " <a href=\"" . str_replace(
                                    "%p",
                                    $counter,
                                    $urlPattern
                                ) . "\" title=\"$counter\" class=\"nav_link\">$counter</a> ";
                        }
                    }
                }
            }

            if ($page < $counter - 1) {
                $topNav .= "<a href=\"" . str_replace(
                        "%p",
                        $next,
                        $urlPattern
                    ) . "\" title=\"$next\" class=\"nounder nounder-last\"> <span>previous</span></a> ";
            } else {
                $topNav .= "<span class=\"nav_link_active nounder nounder-last\"> <span>previous</span></span> ";
            }
        }

        return '<div class="pagination"><div class="top-nav" style="font-size:11px;"> ' . $topNav . '</div>' . $pagination . '</div>';
    }
}