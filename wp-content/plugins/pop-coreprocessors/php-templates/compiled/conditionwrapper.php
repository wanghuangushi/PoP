<?php
 function lcr5a2ad10a10d67wi($cx, $v, $bp, $in, $cb, $else = null) {
  if (isset($bp[0])) {
   $v = lcr5a2ad10a10d67m($cx, $v, array($bp[0] => $v));
  }
  if (($v === false) || ($v === null) || (is_array($v) && (count($v) === 0))) {
   return $else ? $else($cx, $in) : '';
  }
  if ($v === $in) {
   $ret = $cb($cx, $v);
  } else {
   $cx['scopes'][] = $in;
   $ret = $cb($cx, $v);
   array_pop($cx['scopes']);
  }
  return $ret;
 }

 function lcr5a2ad10a10d67hbbch($cx, $ch, $vars, &$_this, $inverted, $cb, $else = null) {
  $options = array(
   'name' => $ch,
   'hash' => $vars[1],
   'contexts' => count($cx['scopes']) ? $cx['scopes'] : array(null),
   'fn.blockParams' => 0,
   '_this' => &$_this,
  );

  if ($cx['flags']['spvar']) {
   $options['data'] = $cx['sp_vars'];
  }

  if (isset($vars[2])) {
   $options['fn.blockParams'] = count($vars[2]);
  }

  // $invert the logic
  if ($inverted) {
   $tmp = $else;
   $else = $cb;
   $cb = $tmp;
  }

  $options['fn'] = function ($context = '_NO_INPUT_HERE_', $data = null) use ($cx, &$_this, $cb, $options, $vars) {
   if ($cx['flags']['echo']) {
    ob_start();
   }
   if (isset($data['data'])) {
    $old_spvar = $cx['sp_vars'];
    $cx['sp_vars'] = array_merge(array('root' => $old_spvar['root']), $data['data'], array('_parent' => $old_spvar));
   }
   $ex = false;
   if (isset($data['blockParams']) && isset($vars[2])) {
    $ex = array_combine($vars[2], array_slice($data['blockParams'], 0, count($vars[2])));
    array_unshift($cx['blparam'], $ex);
   } else if (isset($cx['blparam'][0])) {
    $ex = $cx['blparam'][0];
   }
   if (($context === '_NO_INPUT_HERE_') || ($context === $_this)) {
    $ret = $cb($cx, is_array($ex) ? lcr5a2ad10a10d67m($cx, $_this, $ex) : $_this);
   } else {
    $cx['scopes'][] = $_this;
    $ret = $cb($cx, is_array($ex) ? lcr5a2ad10a10d67m($cx, $context, $ex) : $context);
    array_pop($cx['scopes']);
   }
   if (isset($data['data'])) {
    $cx['sp_vars'] = $old_spvar;
   }
   return $cx['flags']['echo'] ? ob_get_clean() : $ret;
  };

  if ($else) {
   $options['inverse'] = function ($context = '_NO_INPUT_HERE_') use ($cx, $_this, $else) {
    if ($cx['flags']['echo']) {
     ob_start();
    }
    if ($context === '_NO_INPUT_HERE_') {
     $ret = $else($cx, $_this);
    } else {
     $cx['scopes'][] = $_this;
     $ret = $else($cx, $context);
     array_pop($cx['scopes']);
    }
    return $cx['flags']['echo'] ? ob_get_clean() : $ret;
   };
  } else {
   $options['inverse'] = function () {
    return '';
   };
  }

  return lcr5a2ad10a10d67exch($cx, $ch, $vars, $options);
 }

 function lcr5a2ad10a10d67sec($cx, $v, $bp, $in, $each, $cb, $else = null) {
  $push = ($in !== $v) || $each;

  $isAry = is_array($v) || ($v instanceof \ArrayObject);
  $isTrav = $v instanceof \Traversable;
  $loop = $each;
  $keys = null;
  $last = null;
  $isObj = false;

  if ($isAry && $else !== null && count($v) === 0) {
   $ret = $else($cx, $in);
   return $ret;
  }

  // #var, detect input type is object or not
  if (!$loop && $isAry) {
   $keys = array_keys($v);
   $loop = (count(array_diff_key($v, array_keys($keys))) == 0);
   $isObj = !$loop;
  }

  if (($loop && $isAry) || $isTrav) {
   if ($each && !$isTrav) {
    // Detect input type is object or not when never done once
    if ($keys == null) {
     $keys = array_keys($v);
     $isObj = (count(array_diff_key($v, array_keys($keys))) > 0);
    }
   }
   $ret = array();
   if ($push) {
    $cx['scopes'][] = $in;
   }
   $i = 0;
   if ($cx['flags']['spvar']) {
    $old_spvar = $cx['sp_vars'];
    $cx['sp_vars'] = array_merge(array('root' => $old_spvar['root']), $old_spvar, array('_parent' => $old_spvar));
    if (!$isTrav) {
     $last = count($keys) - 1;
    }
   }

   $isSparceArray = $isObj && (count(array_filter(array_keys($v), 'is_string')) == 0);
   foreach ($v as $index => $raw) {
    if ($cx['flags']['spvar']) {
     $cx['sp_vars']['first'] = ($i === 0);
     $cx['sp_vars']['last'] = ($i == $last);
     $cx['sp_vars']['key'] = $index;
     $cx['sp_vars']['index'] = $isSparceArray ? $index : $i;
     $i++;
    }
    if (isset($bp[0])) {
     $raw = lcr5a2ad10a10d67m($cx, $raw, array($bp[0] => $raw));
    }
    if (isset($bp[1])) {
     $raw = lcr5a2ad10a10d67m($cx, $raw, array($bp[1] => $cx['sp_vars']['index']));
    }
    $ret[] = $cb($cx, $raw);
   }
   if ($cx['flags']['spvar']) {
    if ($isObj) {
     unset($cx['sp_vars']['key']);
    } else {
     unset($cx['sp_vars']['last']);
    }
    unset($cx['sp_vars']['index']);
    unset($cx['sp_vars']['first']);
    $cx['sp_vars'] = $old_spvar;
   }
   if ($push) {
    array_pop($cx['scopes']);
   }
   return join('', $ret);
  }
  if ($each) {
   if ($else !== null) {
    $ret = $else($cx, $v);
    return $ret;
   }
   return '';
  }
  if ($isAry) {
   if ($push) {
    $cx['scopes'][] = $in;
   }
   $ret = $cb($cx, $v);
   if ($push) {
    array_pop($cx['scopes']);
   }
   return $ret;
  }

  if ($v === true) {
   return $cb($cx, $in);
  }

  if (($v !== null) && ($v !== false)) {
   return $cb($cx, $v);
  }

  if ($else !== null) {
   $ret = $else($cx, $in);
   return $ret;
  }

  return '';
 }

 function lcr5a2ad10a10d67ifvar($cx, $v, $zero) {
  return ($v !== null) && ($v !== false) && ($zero || ($v !== 0) && ($v !== 0.0)) && ($v !== '') && (is_array($v) ? (count($v) > 0) : true);
 }

 function lcr5a2ad10a10d67encq($cx, $var) {
  if ($var instanceof LS) {
   return (string)$var;
  }

  return str_replace(array('=', '`', '&#039;'), array('&#x3D;', '&#x60;', '&#x27;'), htmlspecialchars(lcr5a2ad10a10d67raw($cx, $var), ENT_QUOTES, 'UTF-8'));
 }

 function lcr5a2ad10a10d67hbch($cx, $ch, $vars, $op, &$_this) {
  if (isset($cx['blparam'][0][$ch])) {
   return $cx['blparam'][0][$ch];
  }

  $options = array(
   'name' => $ch,
   'hash' => $vars[1],
   'contexts' => count($cx['scopes']) ? $cx['scopes'] : array(null),
   'fn.blockParams' => 0,
   '_this' => &$_this
  );

  if ($cx['flags']['spvar']) {
   $options['data'] = $cx['sp_vars'];
  }

  return lcr5a2ad10a10d67exch($cx, $ch, $vars, $options);
 }

 function lcr5a2ad10a10d67m($cx, $a, $b) {
  if (is_array($b)) {
   if ($a === null) {
    return $b;
   } else if (is_array($a)) {
    return array_merge($a, $b);
   } else if (($cx['flags']['method'] || $cx['flags']['prop']) && is_object($a)) {
    foreach ($b as $i => $v) {
     $a->$i = $v;
    }
   }
  }
  return $a;
 }

 function lcr5a2ad10a10d67exch($cx, $ch, $vars, &$options) {
  $args = $vars[0];
  $args[] = $options;
  $e = null;
  $r = true;

  try {
   $r = call_user_func_array($cx['helpers'][$ch], $args);
  } catch (\Exception $E) {
   $e = "Runtime: call custom helper '$ch' error: " . $E->getMessage();
  }

  if($e !== null) {
   lcr5a2ad10a10d67err($cx, $e);
  }

  return $r;
 }

 function lcr5a2ad10a10d67raw($cx, $v, $ex = 0) {
  if ($ex) {
   return $v;
  }

  if ($v === true) {
   if ($cx['flags']['jstrue']) {
    return 'true';
   }
  }

  if (($v === false)) {
   if ($cx['flags']['jstrue']) {
    return 'false';
   }
  }

  if (is_array($v)) {
   if ($cx['flags']['jsobj']) {
    if (count(array_diff_key($v, array_keys(array_keys($v)))) > 0) {
     return '[object Object]';
    } else {
     $ret = array();
     foreach ($v as $k => $vv) {
      $ret[] = lcr5a2ad10a10d67raw($cx, $vv);
     }
     return join(',', $ret);
    }
   } else {
    return 'Array';
   }
  }

  return "$v";
 }

 function lcr5a2ad10a10d67err($cx, $err) {
  if ($cx['flags']['debug'] & $cx['constants']['DEBUG_ERROR_LOG']) {
   error_log($err);
   return;
  }
  if ($cx['flags']['debug'] & $cx['constants']['DEBUG_ERROR_EXCEPTION']) {
   throw new \Exception($err);
  }
 }

if (!class_exists("LS")) {
class LS {
 public static $jsContext = array (
  'flags' => 
  array (
    'jstrue' => 1,
    'jsobj' => 1,
  ),
);
    public function __construct($str, $escape = false) {
        $this->string = $escape ? (($escape === 'encq') ? static::encq(static::$jsContext, $str) : static::enc(static::$jsContext, $str)) : $str;
    }
    public function __toString() {
        return $this->string;
    }
    public static function stripExtendedComments($template) {
        return preg_replace(static::EXTENDED_COMMENT_SEARCH, '{{! }}', $template);
    }
    public static function escapeTemplate($template) {
        return addcslashes(addcslashes($template, '\\'), "'");
    }
    public static function raw($cx, $v, $ex = 0) {
        if ($ex) {
            return $v;
        }

        if ($v === true) {
            if ($cx['flags']['jstrue']) {
                return 'true';
            }
        }

        if (($v === false)) {
            if ($cx['flags']['jstrue']) {
                return 'false';
            }
        }

        if (is_array($v)) {
            if ($cx['flags']['jsobj']) {
                if (count(array_diff_key($v, array_keys(array_keys($v)))) > 0) {
                    return '[object Object]';
                } else {
                    $ret = array();
                    foreach ($v as $k => $vv) {
                        $ret[] = static::raw($cx, $vv);
                    }
                    return join(',', $ret);
                }
            } else {
                return 'Array';
            }
        }

        return "$v";
    }
    public static function enc($cx, $var) {
        return htmlspecialchars(static::raw($cx, $var), ENT_QUOTES, 'UTF-8');
    }
    public static function encq($cx, $var) {
        return str_replace(array('=', '`', '&#039;'), array('&#x3D;', '&#x60;', '&#x27;'), htmlspecialchars(static::raw($cx, $var), ENT_QUOTES, 'UTF-8'));
    }
}
}
return function ($in = null, $options = null) {
    $helpers = array(            'ifget' => function($db, $index, $options) { 

		global $pop_serverside_helpers;
		return $pop_serverside_helpers->ifget($db, $index, $options);
	},
            'generateId' => function($options) { 

		global $pop_serverside_helpers;
		return $pop_serverside_helpers->generateId($options);
	},
            'applyLightTemplate' => function($template, $options){ 

		global $pop_serverside_helpers;
		return $pop_serverside_helpers->applyLightTemplate($template, $options);
	},
            'enterModule' => function($prevContext, $options){ 

		global $pop_serverside_helpers;
		return $pop_serverside_helpers->enterModule($prevContext, $options);
	},
            'withModule' => function($context, $module, $options) { 

		global $pop_serverside_helpers;
		return $pop_serverside_helpers->withModule($context, $module, $options);
	},
);
    $partials = array();
    $cx = array(
        'flags' => array(
            'jstrue' => true,
            'jsobj' => true,
            'jslen' => true,
            'spvar' => true,
            'prop' => false,
            'method' => false,
            'lambda' => false,
            'mustlok' => false,
            'mustlam' => false,
            'echo' => true,
            'partnc' => false,
            'knohlp' => false,
            'debug' => isset($options['debug']) ? $options['debug'] : 1,
        ),
        'constants' =>  array(
            'DEBUG_ERROR_LOG' => 1,
            'DEBUG_ERROR_EXCEPTION' => 2,
            'DEBUG_TAGS' => 4,
            'DEBUG_TAGS_ANSI' => 12,
            'DEBUG_TAGS_HTML' => 20,
        ),
        'helpers' => isset($options['helpers']) ? array_merge($helpers, $options['helpers']) : $helpers,
        'partials' => isset($options['partials']) ? array_merge($partials, $options['partials']) : $partials,
        'scopes' => array(),
        'sp_vars' => isset($options['data']) ? array_merge(array('root' => $in), $options['data']) : array('root' => $in),
        'blparam' => array(),
        'partialid' => 0,
        'runtime' => '\LightnCandy\Runtime',
    );
    
    $inary=is_array($in);
    ob_start();echo '',lcr5a2ad10a10d67wi($cx, (($inary && isset($in['itemObject'])) ? $in['itemObject'] : null), null, $in, function($cx, $in) {$inary=is_array($in);echo '',lcr5a2ad10a10d67hbbch($cx, 'ifget', array(array($in,((isset($cx['scopes'][count($cx['scopes'])-1]) && is_array($cx['scopes'][count($cx['scopes'])-1]) && isset($cx['scopes'][count($cx['scopes'])-1]['condition-field'])) ? $cx['scopes'][count($cx['scopes'])-1]['condition-field'] : null)),array('method'=>((isset($cx['scopes'][count($cx['scopes'])-1]) && is_array($cx['scopes'][count($cx['scopes'])-1]) && isset($cx['scopes'][count($cx['scopes'])-1]['condition-method'])) ? $cx['scopes'][count($cx['scopes'])-1]['condition-method'] : null),'context'=>$cx['scopes'][count($cx['scopes'])-1])), $in, false, function($cx, $in) {$inary=is_array($in);echo '',lcr5a2ad10a10d67sec($cx, ((isset($cx['scopes'][count($cx['scopes'])-1]) && is_array($cx['scopes'][count($cx['scopes'])-1]['template-ids']) && isset($cx['scopes'][count($cx['scopes'])-1]['template-ids']['layouts'])) ? $cx['scopes'][count($cx['scopes'])-1]['template-ids']['layouts'] : null), null, $in, true, function($cx, $in) {$inary=is_array($in);echo '',lcr5a2ad10a10d67hbbch($cx, 'withModule', array(array($cx['scopes'][count($cx['scopes'])-2],$in),array()), $in, false, function($cx, $in) {$inary=is_array($in);echo '';if (lcr5a2ad10a10d67ifvar($cx, ((isset($cx['scopes'][count($cx['scopes'])-3]) && is_array($cx['scopes'][count($cx['scopes'])-3]) && isset($cx['scopes'][count($cx['scopes'])-3]['show-div'])) ? $cx['scopes'][count($cx['scopes'])-3]['show-div'] : null), false)){echo '					<div class="wrapper ',lcr5a2ad10a10d67encq($cx, ((isset($cx['scopes'][count($cx['scopes'])-3]) && is_array($cx['scopes'][count($cx['scopes'])-3]) && isset($cx['scopes'][count($cx['scopes'])-3]['class'])) ? $cx['scopes'][count($cx['scopes'])-3]['class'] : null)),' ',lcr5a2ad10a10d67encq($cx, ((isset($cx['scopes'][count($cx['scopes'])-3]) && is_array($cx['scopes'][count($cx['scopes'])-3]['classes']) && isset($cx['scopes'][count($cx['scopes'])-3]['classes']['succeeded'])) ? $cx['scopes'][count($cx['scopes'])-3]['classes']['succeeded'] : null)),' ',lcr5a2ad10a10d67sec($cx, ((isset($cx['scopes'][count($cx['scopes'])-3]) && is_array($cx['scopes'][count($cx['scopes'])-3]['template-sources']) && isset($cx['scopes'][count($cx['scopes'])-3]['template-sources']['class-extensions'])) ? $cx['scopes'][count($cx['scopes'])-3]['template-sources']['class-extensions'] : null), null, $in, true, function($cx, $in) {$inary=is_array($in);echo '',lcr5a2ad10a10d67encq($cx, lcr5a2ad10a10d67hbch($cx, 'applyLightTemplate', array(array($in),array('context'=>$cx['scopes'][count($cx['scopes'])-4])), 'encq', $in)),'';}),'" style="',lcr5a2ad10a10d67encq($cx, ((isset($cx['scopes'][count($cx['scopes'])-3]) && is_array($cx['scopes'][count($cx['scopes'])-3]) && isset($cx['scopes'][count($cx['scopes'])-3]['style'])) ? $cx['scopes'][count($cx['scopes'])-3]['style'] : null)),'',lcr5a2ad10a10d67encq($cx, ((isset($cx['scopes'][count($cx['scopes'])-3]) && is_array($cx['scopes'][count($cx['scopes'])-3]['styles']) && isset($cx['scopes'][count($cx['scopes'])-3]['styles']['succeeded'])) ? $cx['scopes'][count($cx['scopes'])-3]['styles']['succeeded'] : null)),'" ',lcr5a2ad10a10d67hbbch($cx, 'generateId', array(array(),array('context'=>$cx['scopes'][count($cx['scopes'])-3])), $in, false, function($cx, $in) {$inary=is_array($in);echo '',lcr5a2ad10a10d67encq($cx, ((isset($cx['scopes'][count($cx['scopes'])-3]) && is_array($cx['scopes'][count($cx['scopes'])-3]) && isset($cx['scopes'][count($cx['scopes'])-3]['id'])) ? $cx['scopes'][count($cx['scopes'])-3]['id'] : null)),'';}),'>
						',lcr5a2ad10a10d67encq($cx, lcr5a2ad10a10d67hbch($cx, 'enterModule', array(array($cx['scopes'][count($cx['scopes'])-3]),array()), 'encq', $in)),'
					</div>
';}else{echo '					',lcr5a2ad10a10d67encq($cx, lcr5a2ad10a10d67hbch($cx, 'enterModule', array(array($cx['scopes'][count($cx['scopes'])-3]),array()), 'encq', $in)),'
';}echo '';}),'';}),'';}, function($cx, $in) {$inary=is_array($in);echo '',lcr5a2ad10a10d67sec($cx, ((isset($cx['scopes'][count($cx['scopes'])-1]) && is_array($cx['scopes'][count($cx['scopes'])-1]['template-ids']) && isset($cx['scopes'][count($cx['scopes'])-1]['template-ids']['conditionfailed-layouts'])) ? $cx['scopes'][count($cx['scopes'])-1]['template-ids']['conditionfailed-layouts'] : null), null, $in, true, function($cx, $in) {$inary=is_array($in);echo '',lcr5a2ad10a10d67hbbch($cx, 'withModule', array(array($cx['scopes'][count($cx['scopes'])-2],$in),array()), $in, false, function($cx, $in) {$inary=is_array($in);echo '';if (lcr5a2ad10a10d67ifvar($cx, ((isset($cx['scopes'][count($cx['scopes'])-3]) && is_array($cx['scopes'][count($cx['scopes'])-3]) && isset($cx['scopes'][count($cx['scopes'])-3]['show-div'])) ? $cx['scopes'][count($cx['scopes'])-3]['show-div'] : null), false)){echo '					<div class="wrapper ',lcr5a2ad10a10d67encq($cx, ((isset($cx['scopes'][count($cx['scopes'])-3]) && is_array($cx['scopes'][count($cx['scopes'])-3]) && isset($cx['scopes'][count($cx['scopes'])-3]['class'])) ? $cx['scopes'][count($cx['scopes'])-3]['class'] : null)),' ',lcr5a2ad10a10d67encq($cx, ((isset($cx['scopes'][count($cx['scopes'])-3]) && is_array($cx['scopes'][count($cx['scopes'])-3]['classes']) && isset($cx['scopes'][count($cx['scopes'])-3]['classes']['failed'])) ? $cx['scopes'][count($cx['scopes'])-3]['classes']['failed'] : null)),' ',lcr5a2ad10a10d67sec($cx, ((isset($cx['scopes'][count($cx['scopes'])-3]) && is_array($cx['scopes'][count($cx['scopes'])-3]['template-sources']) && isset($cx['scopes'][count($cx['scopes'])-3]['template-sources']['class-extensions'])) ? $cx['scopes'][count($cx['scopes'])-3]['template-sources']['class-extensions'] : null), null, $in, true, function($cx, $in) {$inary=is_array($in);echo '',lcr5a2ad10a10d67encq($cx, lcr5a2ad10a10d67hbch($cx, 'applyLightTemplate', array(array($in),array('context'=>$cx['scopes'][count($cx['scopes'])-4])), 'encq', $in)),'';}),'" style="',lcr5a2ad10a10d67encq($cx, ((isset($cx['scopes'][count($cx['scopes'])-3]) && is_array($cx['scopes'][count($cx['scopes'])-3]) && isset($cx['scopes'][count($cx['scopes'])-3]['style'])) ? $cx['scopes'][count($cx['scopes'])-3]['style'] : null)),'',lcr5a2ad10a10d67encq($cx, ((isset($cx['scopes'][count($cx['scopes'])-3]) && is_array($cx['scopes'][count($cx['scopes'])-3]['styles']) && isset($cx['scopes'][count($cx['scopes'])-3]['styles']['failed'])) ? $cx['scopes'][count($cx['scopes'])-3]['styles']['failed'] : null)),'" ',lcr5a2ad10a10d67hbbch($cx, 'generateId', array(array(),array('context'=>$cx['scopes'][count($cx['scopes'])-3])), $in, false, function($cx, $in) {$inary=is_array($in);echo '',lcr5a2ad10a10d67encq($cx, ((isset($cx['scopes'][count($cx['scopes'])-3]) && is_array($cx['scopes'][count($cx['scopes'])-3]) && isset($cx['scopes'][count($cx['scopes'])-3]['id'])) ? $cx['scopes'][count($cx['scopes'])-3]['id'] : null)),'';}),'>
						',lcr5a2ad10a10d67encq($cx, lcr5a2ad10a10d67hbch($cx, 'enterModule', array(array($cx['scopes'][count($cx['scopes'])-3]),array()), 'encq', $in)),'
					</div>
';}else{echo '					',lcr5a2ad10a10d67encq($cx, lcr5a2ad10a10d67hbch($cx, 'enterModule', array(array($cx['scopes'][count($cx['scopes'])-3]),array()), 'encq', $in)),'
';}echo '';}),'';}),'';}),'';}),'';return ob_get_clean();
};
?>