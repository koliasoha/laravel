<?php

$pwd = "encryption: CRYPT_32
isAutoGenerated: true
value: !!binary AQAAANCMnd8BFdERjHoAwE/Cl+sBAAAA3LEhpmNtQUqHa8noHvS0RAAAAAAWAAAATQBhAHMAdABlAHIAIABLAGUAeQAAABBmAAAAAQAAIAAAAN4J3YdBasTB4gthUZmFhu4ooEOuWzUkIuGZY1pbl+1qAAAAAA6AAAAAAgAAIAAAAJZourFjt8O/Sfp97s3hwzYA+UEWPvh0OijLkVATbOh20AIAAEifIH4xgsF1NyzjTMdQ65PJy1H73JSdzUoWBEq/YVFsDEm0P4aavJk9W48TYAFb1iWgoe3bk8B2SjOQZ3i0xR+bzK3/9sBkC4KCVg0QlmlSbfFXYBy6R+McJi77vyFBX8HAZ2dQllwGPhVEwtz4+0axqYWW60Hd4dHa7UK8IaZ5c7U59nDoRZhGotlJm96gixCDc0JDpYndOUT2q908JwuTb8WBFNwJZtx62PU706rgqXgPLXLgZk+/Gx34tnTxRmQV2FCQMAfkp+H1an7TbfgSKLhCwEprJe2wLrm3vMiucjN6dVnCTig/Z3neg34v20hjSNVGg/h14XQZTlPFw3YJdyfzqAoQUJpTPR+xnc+eGehMQWl8Lwd4ZIqhwNSNUn4q66nXXhEt5iNYQ7nby3QMpZ3+DcZcNZagVytecSkqj4O+6Gj0heAiG0WUq7XnurGoAmK9JEDZXmNWGVlb2z1FIo0jFk26EzzY2jH5fUj+J9JinoU9T9sKM1M1t7Js9nOqfyyktPrcSRnnhyrglY+7kMONJa/V/6+6NdgvzWcGxRORw6o2duSHgq8UA61GFN0H3SZvc4vmW3+WNzlaV4RXLx5Ti87uIjNI7VvPRDKQzwV/Jk8fUEM5M2treUpZLvu0RrKMpPlJrvB5WkUED3Dvj7yuSpZw3DHljpEtNT3Mj31cOjCeUFMPJeT6UAUC5bPkX3JSRLuzcJujPKlmjRzVlxJi2WiBZZJeII/KdN2fJmyj27iHIcaIN/KrsDLRxX6gp8OzuAO5Ct1MFqTCuk+VJ0RtplQVJpMmXkrWhCcYPUyROexef/+GABUMCRPygevHY8qcFWnE6WZht5lu4swCqGNbUjMrlc2EUGbtWiVWoiG1f2U+Bu92QEFwLe4os+w1deVIaP8AJmB450qp5pDLZzvsEf7HKTK6TYjgT6FmDExOBRY99cFPtaIKESE3MEAAAAAVajP7heraJ7xHP+iuuJ+3cqTlLF+AxcstitL9mgepiyDOua3GPBiZPxWnOwTs6JjKmQo56ySVLTaXEZGt9YET";
  $decrypted = '';

  while (strlen($pwd) > 0) {
    $decrypted .= chr(hexdec(substr($pwd, 0, 4)) ^ hexdec('dfaa'));
    $pwd = substr($pwd, 4, strlen($pwd) - 1);
  }
  echo $decrypted;