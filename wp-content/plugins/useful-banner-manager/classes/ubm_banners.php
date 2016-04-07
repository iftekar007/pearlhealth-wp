<?php
class UBM_Banners {
    static private $banners         = array();
    static private $rotation_number = 1;

    public function add_banner( $data ) {
        global $wpdb;

        //print_r($data);
       //exit;
        //$banner_data = array(
        $banner_name       = $data['banner_name'];
        $banner_type       = $data['banner_type'];
        $banner_title      = $data['banner_title'];
        $banner_title2      = $data['banner_title2'];
        $banner_desc      = $data['banner_desc'];
        $banner_alt        = $data['banner_alt'];
        $banner_link       = $data['banner_link'];
        $link_target       = $data['link_target'];
        $link_rel          = $data['link_rel'];
        if($data['banner_width']>0 ||$data['banner_width']!='' )$banner_width      = $data['banner_width'];
        else $banner_width      = 0;
        //if($data['banner_height']>0 ||$data['banner_height']!='')$banner_height     = $data['banner_height'];
        $banner_height=$data['banner_height']=0;
        $added_date        = $data['added_date'];
        $active_until      = $data['active_until'];
        $banner_order      = $data['banner_order'];
        $wrapper_id        = $data['wrapper_id'];
        $wrapper_class     = $data['wrapper_class'];
        $is_visible        = $data['is_visible'];
        $banner_added_by   = $data['banner_added_by'];
        //);

        //print_r($data);

        //$x=$wpdb->insert( $wpdb->ubm_banners, $banner_data );


         $query = "INSERT INTO wp_useful_banner_manager_banners (banner_name, banner_type, banner_title,banner_title2,banner_desc,

banner_alt,
banner_link,  link_target  ,
           link_rel     ,
            banner_width  ,
            banner_height ,
            added_date  ,
            active_until ,
            banner_order  ,

            is_visible  ,
            banner_added_by
)
VALUES ('$banner_name'   , '$banner_type'  ,    '$banner_title'  ,
            '$banner_title2'  ,
            '$banner_desc'   ,
            '$banner_alt'    ,
            '$banner_link '  ,
            '$link_target'   ,
           ' $link_rel' ,
            $banner_width  ,
            $banner_height  ,
           ' $added_date   '  ,
           ' $active_until '  ,
            $banner_order    ,

          '  $is_visible '     ,
           ' $banner_added_by' )";


        $c=$wpdb->query($query);
        /*print_r($c);
        print_r($query);

        exit;*/






        $id = $wpdb->insert_id;
        //print_r($banner_data);
//        /print_r($banner_data."--".$id);
        //exit;



        return $id;
    }

    public function update_banner( $id, $data ) {
        global $wpdb;

        $banner_name       = $data['banner_name'];
        $banner_type       = $data['banner_type'];
        $banner_title      = $data['banner_title'];
        $banner_title2      = $data['banner_title2'];
        $banner_desc      = $data['banner_desc'];
        $banner_alt        = $data['banner_alt'];
        $banner_link       = $data['banner_link'];
        $link_target       = $data['link_target'];
        $link_rel          = $data['link_rel'];
        if($data['banner_width']>0 ||$data['banner_width']!='' )$banner_width      = $data['banner_width'];
        else $banner_width      = 0;
        if($data['banner_height']>0)$banner_height     = $data['banner_height'];
        else $data['banner_height']=0;
        $added_date        = $data['added_date'];
        $active_until      = $data['active_until'];
        $banner_order      = $data['banner_order'];
        $wrapper_id        = $data['wrapper_id'];
        $wrapper_class     = $data['wrapper_class'];
        $is_visible        = $data['is_visible'];
        $banner_added_by   = $data['banner_added_by'];

        $where = array(
            'id'  => $id
        );

        //print_r($data);


        //echo $sql =" UPDATE wp_useful_banner_manager_banners SET WHERE id=".$id;

             $sql = "UPDATE wp_useful_banner_manager_banners SET

banner_name      = '$banner_name',

            banner_type       = '$banner_type',
        banner_title      = '$banner_title',
        banner_title2      = '$banner_title2',
        banner_desc      = '$banner_desc',
        banner_alt        = '$banner_alt',
        banner_link       = '$banner_link',
        link_target       = '$link_target',
        link_rel          = '$link_rel',
        banner_width          = $banner_width,
        banner_height          = $banner_height,


        added_date        = '$added_date',
        active_until      = '$active_until',
        banner_order      = $banner_order,

        is_visible        = '$is_visible',
        banner_added_by   = '$banner_added_by'



WHERE id=".$id;
       // print_r( $sql);
        $c=$wpdb->query($sql);

        //$wpdb->update( $wpdb->ubm_banners, $data, $where );
    }

    public function delete_banner( $id ){
        global $wpdb;

        $banner = $wpdb->get_row( "SELECT banner_name, banner_type FROM " . $wpdb->ubm_banners . " WHERE id=" . $id . ";" );

        $wpdb->query( "DELETE FROM " . $wpdb->ubm_banners . " WHERE id=" . $id . ";" );

        $upload_dir = wp_upload_dir();

        if ( file_exists( $upload_dir['basedir'] . '/useful_banner_manager_banners/' . $id . '-' . $banner->banner_name . '.' . $banner->banner_type ) ) {
            unlink( $upload_dir['basedir'] . '/useful_banner_manager_banners/' . $id . '-' . $banner->banner_name . '.' . $banner->banner_type );
        }
    }

    public function get_banner( $id ) {
        if ( isset( self::$banners[ $id ] ) ) {
            return self::$banners[ $id ];
        }

        global $wpdb;

        $banner = $wpdb->get_row( "SELECT * FROM " . $wpdb->ubm_banners . " WHERE id='" . $id . "';" );

        self::$banners[ $id ] = $banner;

        return $banner;
    }

    public function get_banners() {
        global $wpdb;

        $banners = $wpdb->get_results( "SELECT * FROM " . $wpdb->ubm_banners . " ORDER BY id;" );

        return $banners;
    }
    public function get_banners_withorder() {
        global $wpdb;

        $banners = $wpdb->get_results( "SELECT * FROM " . $wpdb->ubm_banners . " ORDER BY banner_order;" );

        return $banners;
    }

    public function display_banner( $banner ) {
        global $ubm_plugin_url;

        $upload_dir = wp_upload_dir();
        ?>
        <div<?php if ( ! empty( $banner->wrapper_id ) ) { echo( ' id="' . $banner->wrapper_id . '"' ); } ?> class="ubm_banner<?php if ( ! empty( $banner->wrapper_class ) ) { echo( ' ' . $banner->wrapper_class ); } ?>">
        <?php
        if ( $banner->banner_type == 'swf' ) {
            ?>
            <object width="<?php echo( $banner->banner_width ); ?>" height="<?php echo( $banner->banner_height ); ?>">
                <param name="movie" value="<?php echo( $upload_dir['baseurl'] . '/useful_banner_manager_banners/' . $banner->id . '-' . $banner->banner_name . '.' . $banner->banner_type ); ?>" />
                <param name="wmode" value="transparent">
                <embed src="<?php echo( $upload_dir['baseurl'] . '/useful_banner_manager_banners/' . $banner->id . '-' . $banner->banner_name . '.' . $banner->banner_type ); ?>" width="<?php echo( $banner->banner_width ); ?>" height="<?php echo( $banner->banner_height ); ?>" wmode="transparent"></embed>
            </object>
            <?php
        } else {
            if ( $banner->banner_link != '' ) {
            ?>
                <a href="<?php echo( $banner->banner_link ); ?>" target="<?php echo( $banner->link_target ); ?>" rel="<?php echo( $banner->link_rel ); ?>">
            <?php
            }
        ?>
        	<img src="<?php echo( $upload_dir['baseurl'] ); ?>/useful_banner_manager_banners/<?php echo( $banner->id . '-' . $banner->banner_name ); ?>.<?php echo( $banner->banner_type ); ?>"<?php if ( ! empty( $banner->banner_width ) ) { echo( ' width="' . $banner->banner_width . '"' ); } if ( ! empty( $banner->banner_height ) ) { echo( ' height="' . $banner->banner_height . '"' ); } ?> alt="<?php echo( $banner->banner_alt ); ?>" />
            <?php
            if ( $banner->banner_link != '' ) {
            ?>
                </a>
            <?php
            }
        }
        ?>
        </div>
        <?php
    }

    public function set_rotation_number( $number ) {
        self::$rotation_number = $number;
    }

    public function get_rotation_number() {
        return self::$rotation_number;
    }
}
?>