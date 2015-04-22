# WrappedTags

> Compatible with Pimcore 3.x.x

## Description

This plugin wrap all native pimcore tags so that you can easily extend them. To use your extended version just add the suffix "plus" to your tag.

For example if you want to use the wrapped version of the areablock write this in your view:
```
echo $this->areablockplus('myAreablock');
```

## How to install

* Create folder and drop files in "/plugins/WrappedTags"
* Go to extension menu and click enable