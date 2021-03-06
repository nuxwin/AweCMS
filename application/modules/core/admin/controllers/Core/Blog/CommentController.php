<?php
/**
 * AweCMS
 *
 * LICENSE
 *
 * This source file is subject to the BSD license that is bundled
 * with this package in the file LICENSE.txt
 *
 * It is also available through the world-wide-web at this URL:
 * http://www.opensource.org/licenses/bsd-license.php
 *
 * @category   AweCMS
 * @package    AweCMS_Admin_Blog
 * @copyright  Copyright (c) 2010 Rock Solid Web Design (http://rocksolidwebdesign.com)
 * @license    http://www.opensource.org/licenses/bsd-license.php BSD License
 */

class Admin_Core_Blog_CommentController extends Awe_Controller_AutoAdmin
{
    protected $entity = '\Entities\Core\Blog\Comment';
    protected $entityLabel = 'Blog Comment';
    protected $entityLabelPlural = 'Blog Comments';
    protected $controllerName = 'core_blog_comment';
}
?>
