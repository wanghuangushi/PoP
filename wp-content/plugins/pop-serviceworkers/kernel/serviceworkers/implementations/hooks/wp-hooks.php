<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Data Load Library
 *
 * ---------------------------------------------------------------------------------------------------------------*/
 
class PoP_ServiceWorkers_Hooks_WP {

    private $scripts, $styles, $dom;

    function __construct() {

        $this->scripts = $this->styles = array();
        $this->doc = new DOMDocument();

        add_filter(
            'script_loader_tag',
            array($this, 'script_loader_tag')
        );
        add_filter(
            'style_loader_tag',
            array($this, 'style_loader_tag')
        );        
        add_filter(
            'PoP_ServiceWorkers_Job_CacheResources:precache',
            array($this, 'get_precache_list'),
            10,
            2
        );
        add_filter(
            'PoP_ServiceWorkers_Job_Fetch:exclude:full',
            array($this, 'get_excluded_fullpaths'),
            10,
            2
        );
    }

    function script_loader_tag($tag) {

        if (!empty($tag)) {
            
            $this->doc->loadHTML($tag);
            foreach($this->doc->getElementsByTagName('script') as $script) {
                if($script->hasAttribute('src')) {

                    $this->scripts[] = $script->getAttribute('src');
                }
            }
        }

        return $tag;
    }

    function style_loader_tag($tag) {

        if (!empty($tag)) {
            
            $this->doc->loadHTML($tag);
            foreach($this->doc->getElementsByTagName('link') as $link) {
                if($link->hasAttribute('href')) {

                    $this->styles[] = $link->getAttribute('href');
                }
            }
        }

        return $tag;
    }

    function get_precache_list($precache, $resourceType) {

        if ($resourceType == 'static') {

            // // Remove the sw-registrar.js file from the list of resources to cache!
            // global $pop_serviceworkers_manager;
            // $sw_registrar = add_query_arg('ver', POP_SERVICEWORKERS_VERSION, $pop_serviceworkers_manager->get_fileurl('sw-registrar.js'));
            // $pos = array_search($sw_registrar, $this->scripts);
            // if ($pos !== false) {
            //     array_splice($this->scripts, $pos, 1);
            // }

            // File json2.min.js is not added through the $scripts list because it's lt IE 8, so then add it manually here
            // Copied from file wp-includes/script-loader.php function wp_default_scripts( &$scripts )
            global $wp_scripts;
            $suffix = SCRIPT_DEBUG ? '' : '.min';
            $this->scripts[] = add_query_arg('ver', '2015-05-03', $wp_scripts->base_url."/wp-includes/js/json2$suffix.js");

            // Needed for the thickbox: thickboxL10n['loadingAnimation'] javascript code produced in the front-end
            // Loaded in wp-includes/script-loader.php
            $precache[] = includes_url('js/thickbox/loadingAnimation.gif');

            $precache = array_merge(
                $precache,
                $this->scripts,
                $this->styles
            );
        }

        return $precache;
    }

    function get_excluded_fullpaths($excluded, $resourceType) {
        
        if ($resourceType == 'json' || $resourceType == 'html') {
            
            // Do not intercept access to the WP Dashboard
            $excluded[] = admin_url();
            $excluded[] = content_url();
            $excluded[] = includes_url();
        }
        elseif ($resourceType == 'static') {

            // Do not cache the service-worker.js file
            global $pop_serviceworkers_manager;
            $excluded[] = $pop_serviceworkers_manager->get_fileurl('service-worker.js');
        }

        return $excluded;
    }
}
    
/**---------------------------------------------------------------------------------------------------------------
 * Initialize
 * ---------------------------------------------------------------------------------------------------------------*/
new PoP_ServiceWorkers_Hooks_WP();
