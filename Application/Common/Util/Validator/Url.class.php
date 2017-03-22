<?php

namespace Common\Util\Validator;
  
class url
{

  static $pattern = "{
    # scheme
      (?:([a-z][a-z0-9+.-]*?)[:])?(?:[/]{2})
    # userinfo
      (?:([a-z0-9-._~!$&'()*+,;=:%]*?)[@])?
    # host
      # reg-name
      ((?:[a-z0-9-._~%!$&'()*+,;=]*?)|
      # IPv4
      (?:(?:[1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])[.]){3}(?:[1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])|
      # IPv6 from http://forums.dartware.com/viewtopic.php?t=452
      (?:\[\s*(?:(?:(?:[0-9A-Fa-f]{1,4}:){7}(?:(?:[0-9A-Fa-f]{1,4})|:))|(?:(?:[0-9A-Fa-f]{1,4}:){6}(?:[:]|(?:(?:25[0-5]|2[0-4]\d|[01]?\d{1,2})(?:\.(?:25[0-5]|2[0-4]\d|[01]?\d{1,2})){3})|(?:[:][0-9A-Fa-f]{1,4})))|(?:(?:[0-9A-Fa-f]{1,4}:){5}(?:(?:[:](?:(?:25[0-5]|2[0-4]\d|[01]?\d{1,2})(?:\.(?:25[0-5]|2[0-4]\d|[01]?\d{1,2})){3})?)|(?:(?:[:][0-9A-Fa-f]{1,4}){1,2})))|(?:(?:[0-9A-Fa-f]{1,4}:){4}(?:[:][0-9A-Fa-f]{1,4}){0,1}(?:(?:[:](?:(?:25[0-5]|2[0-4]\d|[01]?\d{1,2})(?:\.(?:25[0-5]|2[0-4]\d|[01]?\d{1,2})){3})?)|(?:(?:[:][0-9A-Fa-f]{1,4}){1,2})))|(?:(?:[0-9A-Fa-f]{1,4}:){3}(?:[:][0-9A-Fa-f]{1,4}){0,2}(?:(?:[:](?:(?:25[0-5]|2[0-4]\d|[01]?\d{1,2})(?:\.(?:25[0-5]|2[0-4]\d|[01]?\d{1,2})){3})?)|(?:(?:[:][0-9A-Fa-f]{1,4}){1,2})))|(?:(?:[0-9A-Fa-f]{1,4}:){2}(?:[:][0-9A-Fa-f]{1,4}){0,3}(?:(?:[:](?:(?:25[0-5]|2[0-4]\d|[01]?\d{1,2})(?:\.(?:25[0-5]|2[0-4]\d|[01]?\d{1,2})){3})?)|(?:(?:[:][0-9A-Fa-f]{1,4}){1,2})))|(?:(?:[0-9A-Fa-f]{1,4}:)(?:[:][0-9A-Fa-f]{1,4}){0,4}(?:(?:[:](?:(?:25[0-5]|2[0-4]\d|[01]?\d{1,2})(?:\.(?:25[0-5]|2[0-4]\d|[01]?\d{1,2})){3})?)|(?:(?:[:][0-9A-Fa-f]{1,4}){1,2})))|(?:[:](?:[:][0-9A-Fa-f]{1,4}){0,5}(?:(?:[:](?:(?:25[0-5]|2[0-4]\d|[01]?\d{1,2})(?:\.(?:25[0-5]|2[0-4]\d|[01]?\d{1,2})){3})?)|(?:(?:[:][0-9A-Fa-f]{1,4}){1,2})))|(?:(?:(?:25[0-5]|2[0-4]\d|[01]?\d{1,2})(?:\.(?:25[0-5]|2[0-4]\d|[01]?\d{1,2})){3})))(?:%.+)?\s*\]))
    # port
      (?:[:]([0-9]*?))?
    # path
      (?:[/]([a-z0-9-._~!$&'()*+,;=%:@/]*?))?
    # query
      (?:[?]([/?a-z0-9-._~!$&'()*+,;=%:@]*?))?
    # fragment
      (?:[#]([a-z0-9-._~%:@!$&'()*+,;=]*))?
  }ix";

  public static function test($input)
  {
    return !!preg_match(static::$pattern, $input);
  }
}