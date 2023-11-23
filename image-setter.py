import os
import shutil
import threading

from PIL import Image


images_folder = "images"

low_quality_folder = f"{images_folder}/low"
source_quality_folder = f"{images_folder}/source"

def dir_exists(path:str):
    return (os.path.exists(path) and os.path.isdir(path))

def is_image(file_path):
    try:
        Image.open(file_path)
        return True
    except:
        return False

if(dir_exists(images_folder)):

    # Crear los directorios de baja y alta calidad si no existen

    if(dir_exists(low_quality_folder)): shutil.rmtree(low_quality_folder)
    if(not dir_exists(source_quality_folder)):
        os.mkdir(source_quality_folder)
        print("La carpeta de source no estaba creada.")
        exit

    print("Copying source files...")
    shutil.copytree(source_quality_folder, low_quality_folder)

    print("Resizing images files...")
    def quarter_quality(tree_path:str):
        tree_list:list[str] = os.listdir(tree_path)

        for node in tree_list:
            node = tree_path+"/"+node

            if(os.path.isdir(node)):
                quarter_quality(node)
                continue
            elif(is_image(node)):
                current_image = Image.open(node)
                new_image_size = (int(current_image.size[0] * 0.25), int(current_image.size[1] * 0.25))
                modified = current_image.resize(new_image_size, Image.BILINEAR)
                os.remove(node)
                modified.save(node)
                print(f"Imagen {node} modificada.")

    threading.Thread(target=quarter_quality, args=[low_quality_folder]).run() 
else:
    print("Error, la carpeta de imágenes no existe.")

